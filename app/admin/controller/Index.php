<?php
namespace app\admin\controller;

use app\admin\model\Admin;
use app\common\controller\Base;
use think\View;

class Index extends Base
{
    // public function __construct(){
    //     parent::__construct();//检测是否登陆
    // }

    public function index()
    {
        $view = new View;
        return $view->fetch('',[
        ]);
    }
}
