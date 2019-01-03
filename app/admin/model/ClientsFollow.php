<?php
namespace app\admin\model;

use think\Model;
use think\Config;
class ClientsFollow extends Model
{

    //自动完成
    public function getAreaAttr($area){
        $areainfo = Config::get('area');
        
        return $areainfo[$area];
    }
}