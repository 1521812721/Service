<?php
/**
 * Created by JUST Practise!
 * User: Azal.zzw
 * Date: 2018/9/10
 * Time: 10:33
 */

namespace app\api\model;

class Banner extends BaseModel
{

    protected $hidden = ['update_time', 'delete_time','type', 'img_id', 'category_id'];

    public function imgs()
    {
        return $this->hasOne('Image', 'id', 'img_id');
    }

    public static function getBannerById($ids)
    {
        $banner = self::with('imgs')
            ->select($ids);
        return $banner;
    }

}