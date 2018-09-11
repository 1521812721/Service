<?php
/**
 * Created by JUST Practise!
 * User: Azal.zzw
 * Date: 2018/9/10
 * Time: 19:28
 */

namespace app\api\model;


class User extends BaseModel
{
    protected $hidden = ['head_img_id', 'back_img_id', 'openid'];

    public function headImg()
    {
        return $this->hasOne('Image', 'id', 'head_img_id');
    }

    public function backImg()
    {
        return $this->hasOne('Image', 'id', 'back_img_id');
    }

    public static function getUserInfoById($id)
    {
        $result = self::with(['headImg', 'backImg'])
            ->find($id);

        return $result;
    }

}