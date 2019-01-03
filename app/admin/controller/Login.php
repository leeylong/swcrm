<?php
namespace app\admin\controller;

use think\Controller;
use app\admin\model\Admin;
use think\Session;
class Login extends Controller
{
    public function index(){
        return $this->fetch();
    }

    public function check(){
        $username = $_POST['username'];
        $password = $_POST['password'];
        if(!trim($username)){
            return  show(0,'用户名不能为空!');
        }

        if(!trim($password)){
            return  show(0,'密码不能为空!');
        }

        $ret = Admin::get(['username'=> $username]);

        if(!$ret){
            show(0,'该用户不存在');
        }

        // dump($ret['password'].'------'.getMd5Password($password));exit();
        if($ret['password'] != getMd5Password($password)){
            show (0,'密码错误');
        }

        Session::set('adminUser',$ret);
        return show(1,'登陆成功');
    }

    public function loginOut(){
        Session::set('adminUser',null);
        $this->success('退出成功','/admin/login');
    }

}