<?php
/**
 * Created by JUST Practise!
 * User: Azal.zzw
 * Date: 2018/8/4
 * Time: 17:50
 */

namespace app\api\validate;


use app\lib\exception\ParameterException;
use think\Request;
use think\Validate;

class BaseValidate extends Validate
{
    public function goCheck()
    {
        //获取http传入的参数
        //对这些参数进行校验
        $request = Request::instance();//获取所有参数的方法
        $params = $request->param();

        $result = $this->check($params);

        if (!$result) {//检测参数如果有错误就传入一个参数异常
            $e = new ParameterException([
                'msg' => $this->error,
                //传入数组到父类构造函数 实现只选择在抛出的异常中只有msg这个信息被修改
                // 其他的还是ParameterException中的
            ]);

            throw $e;

        } else {
            return true;
        }

    }

    //检查为正整数
    protected function isPositiveInteger($value)
    {
        if (is_numeric($value) && is_int($value + 0) && ($value + 0) > 0) {
            return true;
        }
        else {
            return false;
        }
    }

    protected function isMobile($value)
    {
        $rule = '^1(3|4|5|6|7|8)[0-9]\d{8}$^';
        $result = preg_match($rule, $value);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    protected function isNotEmpty($value)
    {
        if(empty($value)) {
            return false;
        } else {
            return true;
        }
    }

    //按规则得到数据
    public function getDataByRule($arrays)
    {
        if (array_key_exists('user_id', $arrays) |
            (array_key_exists('uid', $arrays))) {
            throw new ParameterException([
                'msg' => '参数中包含非法的参数名user_id,或者uid'
            ]);
        }
        $newArray = [];
        foreach ($this-> rule as $key => $value) {
            $newArray[$key] = $arrays[$key];
        }
        return $newArray;
    }



}