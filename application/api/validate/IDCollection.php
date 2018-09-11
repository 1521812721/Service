<?php
/**
 * Created by JUST Practise!
 * User: Azal.zzw
 * Date: 2018/8/9
 * Time: 11:48
 */

namespace app\api\validate;


class IDCollection extends  BaseValidate
{
    protected $rule = [
        'ids' => 'require|checkIDs'
    ];

    protected $message =[
        'ids' => 'id参数必须是以逗号隔开的多个正整数'
    ];

    protected function checkIDs($value)
    {
        $values = explode(',', $value);
        if (empty($values)) {
            return false;
        }
        foreach ($values as $id) {
            if (!$this->isPositiveInteger($id)) {
                return false;
            }
        }
        return true;
    }
}