<?php
/**
 * Created by JUST Practise!
 * User: Azal.zzw
 * Date: 2018/9/10
 * Time: 18:50
 */

namespace app\lib\exception;


class CategoryException extends BaseException
{
    public $code = '404';
    public $msg = '请求的分类列表不存在，请检查id';
    public $errorCode = 50000;
}