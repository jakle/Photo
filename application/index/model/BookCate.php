<?php
/**
 * Created by PhpStorm.
 * User: jakle
 * Date: 2017/8/31
 * Time: 23:45
 */
namespace app\index\model;

use think\Model;

class BookCate extends Model{
    protected $table = 'mh_book_cate_connect';

    public function catename(){
        return $this->belongsTo('Cate','cate_id','id');
    }
}