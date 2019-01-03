<?php
namespace app\admin\model;

use think\Model;

class Message extends Model
{
    protected $insert = [
        'who' => USER_ID,//当前用户ID
    ]; 

    public function getUpdatetimeAttr($updatetime){
        return date("Y-m-d H:i:s",$updatetime);
    }
}