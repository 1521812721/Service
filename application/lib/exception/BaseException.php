<?php
/**
 * Created by JUST Practise!
 * User: Azal.zzw
 * Date: 2018/8/5
 * Time: 18:54
 */

namespace app\lib\exception;


use think\Exception;

class BaseException extends Exception
{
    //HTTP状态码 404，200
    public $code = 400;

    //错误具体信息
    public $msg = '参数错误';

    //自定义的错误码
    public $errorCode = 10000;

    //TODO:构造函数用来方便自己定义传入的错误信息，可以单选code msg errorcode 个别参数
    public function __construct($params = [])
    {
        if (!is_array($params)) {
            return;
        }

        if (array_key_exists('code', $params)) {
            $this->code = $params['code'];
        }
        if (array_key_exists('msg', $params)) {
            $this->msg = $params['msg'];
        }
        if (array_key_exists('errorCode', $params)) {
            $this->errorCode = $params['errorCode'];
        }

    }

}