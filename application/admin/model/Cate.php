<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/31
 * Time: 14:46
 */
namespace  app\index\model;

use think\Model;

class Cate extends Model{

    public function getCateName(){
        return $this->hasOne('BookCateRelation','cate_id')->field('cate_name');
    }
}