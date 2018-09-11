<?php
/**
 * Created by JUST Practise!
 * User: Azal.zzw
 * Date: 2018/9/10
 * Time: 10:33
 */


namespace app\api\model;

class Category extends BaseModel
{

    protected $hidden = ['category_img_id'];

    public function categoryImg()
    {
        return $this->hasOne('Image', 'id', 'category_img_id');
    }


    public static function getCategoryList()
    {
        $category = self::all([],'categoryImg');
        return $category;

    }

}