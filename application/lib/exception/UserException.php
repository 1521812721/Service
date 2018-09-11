<?php
/**
 * Created by JUST Practise!
 * User: Azal.zzw
 * Date: 2018/9/10
 * Time: 19:41
 */

namespace app\lib\exception;


class UserException extends BaseException
{
    public $code = '404';
    public $msg = '用户不存在';
    public $errorCode = 60000;

}