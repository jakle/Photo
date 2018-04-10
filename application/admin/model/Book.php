<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/31
 * Time: 14:41
 */
namespace  app\index\model;

use think\Model;

class Book extends Model{

    protected $hidden = ['id', 'book_id', 'book_coin'];

    public function getBookList($condition=[],$page){
       return Book::where($condition)->paginate($page);
    }

    public function BookCate(){
        return $this->hasMany('BookCate','book_id','id');
//        echo $this->getLastSql();exit;
//        return $res;
    }
}