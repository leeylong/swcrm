<?php
namespace app\admin\model;

use think\Model;
class Clients extends Model
{
    // 定义自动完成的属性
    protected $autoWriteTimestamp = true;   
    // 定义时间戳字段名
    protected $createTime = 'addtime';
    protected $updateTime = 'updatetime';

    public function getFollowsituationAttr($followsituation){
        $followsituationConfig = [
            '未跟踪','已跟踪'
        ];

        return $followsituationConfig[$followsituation];
    }

    /**
     * client->messages方法
     */
    public function messages(){
        return $this->hasMany("Message","relatedclient");
    }

    /**
     * 获取用户意向程度
     */
    // user_birthday读取器
    protected function getClientMindAttr($value,$data)
    {
        return str_repeat('★',$data['tuijian']);
    }

    public function isMyClient($id='0'){
        // $this->
    }
}