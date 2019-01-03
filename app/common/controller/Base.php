<?php
namespace app\common\controller;

use think\Controller;
use think\Session;
use think\View;

class Base extends Controller
{

    public function __construct()
    {
        if(!Session::get('adminUser')){
            $this->success('未登陆', 'Admin/login/index');
        }
        //设定全局用户id
        define("USER_ID",Session::get('adminUser.admin_id'));
    }
}