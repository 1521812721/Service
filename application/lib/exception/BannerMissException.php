<?php
/**
 * Created by JUST Practise!
 * User: Azal.zzw
 * Date: 2018/9/10
 * Time: 12:11
 */

namespace app\lib\exception;

class BannerMissException extends BaseException
{
    public $code = '404';
    public $msg = '请求的Banner不存在';
    public $errorCode = '40000';
}