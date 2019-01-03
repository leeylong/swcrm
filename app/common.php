<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Config;

// 应用公共文件
/**
 * 公共方法文件
 * @author lee dayu.co
 */

 /**
  * 返回前端json结果
  */
function show($status,$message,$data=Array()){
    $result = array(
        'status' => $status,
        'message' =>$message,
        'data' => $data,
    );
    exit(json_encode($result));
}

/**
 * 获取加密密码
 * @author lee
 */
function getMd5Password($password){
    return md5($password.Config::get('PASS_PRE'));
}

/**
 * 获取某月的第一天和最后一天
 */
function getFirstLastDay($time=''){
    $timeRange = [];

    if(!$time){//如果没有时间则返回本月数据
        $timeRange['first'] = date("1970-1-1"); 
        $timeRange['last'] = date("Y-m-t");
        return $timeRange;
    }

    $timeRange['first'] = date('Y-m-1',strtotime($time));
    $timeRange['last'] = date('Y-m-t',strtotime($time));

    
    return $timeRange;
}