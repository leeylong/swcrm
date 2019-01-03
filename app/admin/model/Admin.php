<?php
namespace app\admin\model;

use think\Model;
class Admin extends Model
{
    public function clientsFollow(){
        return $this->hasMany('ClientsFollow','saler_id');
    }
}