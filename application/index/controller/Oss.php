<?php
/**
 * Created by PhpStorm.
 * User: jakle
 * Date: 2017/12/31
 * Time: 13:35
 */

namespace app\index\controller;


use OSS\OssClient;

class Oss
{
    public function upload($object,$content){
        $accessKeyId = config('OSS.accessKeyId');
        $accessKeySecret = config('OSS.accessKeySecret');
        $endpoint = config('OSS.endpoint');
        $bucket = config('OSS.bucketName');

        $fileName =  '2017/12/31' . $content;

        try {
            $ossClient = new OssClient(
                $accessKeyId, $accessKeySecret, $endpoint, true /* use cname */);
                $ossClient->putObject($bucket, $fileName, $object);
            return config('OSS.baseUrl') . "/" . $fileName;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}