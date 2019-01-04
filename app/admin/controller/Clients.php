<?php
namespace app\admin\controller;

use app\admin\model\Admin as AdminModel;
use app\admin\model\Clients as ClientsModel;
use app\admin\model\ClientsFollow as ClientsFollowModel;
use app\admin\model\Message as MessageModel;
use app\common\controller\Base;
use think\View;
use think\Session;
use think\Request;

class Clients extends Base
{
    public function index(Request $request)
    {
        
        $condition = [];
        $condition['saler']           = ['eq',Session::get('adminUser.admin_id')];
        $condition['status']          = ['neq',-1];
        $condition['private']         = ['eq',1];

        if($request->param('addtime')){//如果有时间传入则调用函数以返回时间范围（某月的第一天和最后一天）
            $timeRange = getFirstLastDay($request->param('addtime'));
            $timeRange['ori'] = $request->param('addtime');
        }else{
            $timeRange = getFirstLastDay();
        }

        //get搜索条件
        if($request->param('companyname')){
            $condition['companyname'] = ['like','%'.trim($request->param('companyname')).'%'];
        }

        $clients = new ClientsModel;

        $list = $clients->where($condition)
        ->where('saler','in',[Session::get('adminUser.admin_id'),0,])
        ->where('addtime','between time',[$timeRange["first"],$timeRange["last"]])
        ->order('tuijian desc,updatetime desc,client_id desc')
        ->paginate(15);//获取本页数据

        // dump($clients::getLastSql());
        foreach($list as $k=>$val){
            $mes = $val->messages()->order('updatetime desc')->find();
            $list[$k]['lastMessage'] = $mes['content'] ? $mes['content'] : '无';
        }
        $page = $list->render();//获取分页代码

        $view = new View;
        return $view->fetch('',[
            'client_list'     =>   $list,
            'pages'           =>   $page,
            'condition'       =>   $condition
        ]);
    }

    //客户信息展示页面
    public function show(Request $request){
        $client_id = $request->param('id');

        $client = ClientsModel::get($client_id,'messages');
        $messages = array_reverse($client->messages);

        $view = new View;
        return $view->fetch('',[
            'client'         =>   $client,
            'messages'       =>   $messages
        ]);
    }


    /**
     * 我添加的客户页面
     */
    public function addself(){
        $condition = [];
        $condition['adder']           = ['eq',Session::get('adminUser.admin_id')];
        $condition['followsituation'] = 0;
        $condition['status']           = ['eq',0];

        $clients = new ClientsModel;
        $clients_list = $clients->all();

        $list = $clients->where($condition)->order('client_id desc')->paginate(30);//获取本页数据
        foreach($list as $k=>$val){
            $mes = $val->messages()->order('updatetime desc')->find();
            $list[$k]['lastMessage'] = $mes['content'] ? $mes['content'] : '无';
        }
        $page = $list->render();//获取分页代码

        // dump($clients::getLastSql());
        $view = new View;
        return $view->fetch('',[
            'client_list'     =>   $list,
            'pages'           =>   $page
        ]);
    }

    /**
     * 公海页面
     * 要展示的信息：followsituation为0、status不为-1,private为0
     * 
     */
    public function gonghai(){
        $condition = [];
        $condition['followsituation'] = ['eq',0];
        $condition['private'] = ['eq',0];
        $condition['status'] = ['eq',1];

        // dump(Session::get('adminUser'));exit;

        $clients = new ClientsModel;
        $clients_list = $clients->all();

        $list = $clients->where($condition)->order('updatetime desc,client_id desc')->paginate(15);//获取本页数据
        foreach($list as $k=>$val){
            $mes = $val->messages()->order('updatetime desc')->find();
            $list[$k]['lastMessage'] = $mes['content'] ? $mes['content'] : '无';
        }
        $page = $list->render();//获取分页代码
        // dump($clients::getLastSql());

        $view = new View;
        return $view->fetch('',[
            'client_list'     =>   $list,
            'pages'           =>   $page
        ]);
    }

    public function baifang(Request $request){
        $visitObj = new ClientsFollowModel;
        $adminObj = new AdminModel;
        
        //生成查询条件
        $condition = [
            'saler_id'      => USER_ID,
        ];
        //get搜索条件
        if($request->param('addtime')){//如果有时间传入则调用函数以返回时间范围（某月的第一天和最后一天）
            $timeRange = getFirstLastDay($request->param('addtime'));
            $timeRange['ori'] = $request->param('addtime');
        }else{
            $timeRange = getFirstLastDay();
        }

        if($request->param('clientname')){
            $condition['clientname'] = ['like','%'.trim($request->param('clientname')).'%'];
        }

        $visitList = $visitObj
        ->where($condition)
        ->where('updatetime','between time',[$timeRange["first"],$timeRange["last"]])
        ->order('updatetime desc')
        ->paginate(30);

        //获取商务人员
        foreach($visitList as $val){
            $user = $adminObj::get($val['saler_id']);
            $val['realname']   =    $user['realname'];
        }

        $page = $visitList->render();//获取分页代码
        $view = new View;
        return $view->fetch('',[
            'clients_follow_list'     =>   $visitList,
            'pages'           =>   $page
        ]);
    }

    public function updateByid($id=0,$data=array()){
        // print_r($_POST);exit;

        if(!$id && !$_POST['pk']){
            return show(0,'ID非法');
        }

        //如果pk传入则为editable传入，执行editable方法
        if(intval($_POST['pk'])){
            $client_id = intval($_POST['pk']);

            $data[$_POST['name']] = $_POST['value'];

            if($_POST['name'] == 'status'){//如果传入的是状态值则执行setClientStatus()方法，以此来更新客户状态信息。
                $ret = $this->setClientStatus($client_id,$data);
                if($ret == true){
                    return show(1,'状态更改成功');
                }else{
                    return show(0,'状态更改失败');
                }
            }
            $client = ClientsModel::get($client_id);

            $ret = $client->save($data);
        }

        if($ret){
            return show(1,'更新成功');
        }
        return show(0,'更新失败');
    }

    public function add(Request $request){
        $data = array();
        if($request->param("companyname")){
            $data['companyname'] = $request->param("companyname");
        }else{
            $this->error("没有填入公司名称",$request->server("HTTP_REFERER"));
        }

        $data['adder'] = Session::get('adminUser.admin_id');
        $data['private'] = 1;
        $data['status'] = 0;

        $client = new ClientsModel;

        $ret = $client->save($data);
        if($ret){
            $this->success("新增成功",$request->server("HTTP_REFERER"));
        }else{
            $this->error("新增成功",$request->server("HTTP_REFERER"));
        }
    }

/**
 * 新增客户拜访信息
 */
    public function visitadd(Request $request){
        $data = $request->post();
        if(!trim($data['clientname'])){
            $this->error('请填写客户名称');
        }
        if(!trim($data['area'])){
            $this->error('请填写客户地区');
        }
        if(!trim($data['area'])){
            $this->error('请填写客户地址');
        }
        if(!trim($data['area'])){
            $this->error('请填写客户联系方式');
        }
        $data['saler_id']   =   USER_ID;
        $data['updatetime']   =   time();

        $clientFollow = new ClientsFollowModel;
        $ret = $clientFollow->save($data);

        if($ret){
            return    $this->success("新增成功");
        }
        return    $this->success("新增失败");
    }

    //新增客户留言信息
    public function insertMes(Request $request){
        $data = [];
        if($request->param('id')){//正常获取id
            $data['relatedclient'] = $request->param('id');//传入的客户ID
        }
        if($request->param('pk')){//实时编辑id
            $data['relatedclient'] = $request->param('pk');//传入的客户ID
        }
        $data['content'] = $request->param('content');//传入的留言内容
        if($request->post('value')){
            $data['content'] = $request->post('value');//实时编辑内容
        }
        $data['updatetime'] = time();//传入的留言时间

        // dump($request);exit;
        $mes = new MessageModel;
        $mes->data($data);
        $ret = $mes->save($data);

        // dump($ret);

        $this->success('留言成功',$request->server("HTTP_REFERER"));
    }


    /**
     * 根据id更改信息
     */

    public function updateDataByid(){
        $data = $_POST;
        if(!$data['id']){
            return show(0,'ID非法');
        }

        $id = $data['id'];
        unset($data['id']);


        $ret = $this->setClientStatus($id,$data);

        if($ret == true){
            return show(1,'操作成功');
        }else{
            return show(0,'操作失败');
        }
    }

    /**
     * @ahthor lee
     * 更改客户的状态及关联信息
     * case1:
     * 状态值是0代表入公海，followsituation也应为0，privete置0
     * case2:
     * 状态值是-1代表删除操作，followsituation应为0，privete置0
     * case3:
     * 状态值是1代表入私海，followsituation应为1，privete置1,saler_id更新为当前用户
     */
    public function setClientStatus($id=0,$data=Array()){
        $client = ClientsModel::get($id);//获取客户信息

        switch($data['status']){
            case '0':
                $data['followsituation'] = 0;
                $data['private'] = 0;
                $data['saler']   = 0;
                $data['status']   = 1;
                break;
            case '-1':
                $data['followsituation'] = 0;
                $data['private'] = 0;
                $data['saler']   = 0;
                $data['status']   = -1;
                if($client['adder'] != USER_ID){
                    return false;
                }
                break;
            case '1':
                $data['followsituation'] = 1;
                $data['private'] = 1;
                $data['saler']   = USER_ID;
                $data['status']   = 1;
                break;
        }

        $ret = $client->save($data);

        if($ret){
            return true;
        }else{
            return false;
        }
    }


    /**
     * 数据监测
     */
    public function checkdata(Request $request){
        $data = $request->post();
        $clients = new ClientsModel;
        $clientsList = $clients->where($data)->select();

        if($clientsList){//如果公司名称为空或者找到了对应的公司名称则返回错误信息
            return show(0,'公司名称已存在');
        }
        return show(1,'公司名称可用');
    }
}
