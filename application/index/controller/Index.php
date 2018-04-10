<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller
{
    public function index()
    {
        return view();

    }

    public function upload(){
        $oss = new Oss();
//        $file = request()->file();
//        var_dump($_FILES);exit;
        $content = file_get_contents($_FILES["file"]["tmp_name"]);
        $filename = time().'-'.rand(1000,9999).getFilePrefix($_FILES["file"]["name"]);
//        var_dump($content,$filename);exit;
        $img = $oss->upload($content, $filename);
        echo $img;
//        return false;
    }
}
