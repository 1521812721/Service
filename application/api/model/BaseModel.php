<?php
/**
 * Created by JUST Practise!
 * User: Azal.zzw
 * Date: 2018/8/7
 * Time: 16:19
 */

namespace app\api\model;


use think\Model;

class BaseModel extends Model
{
    //拼接url的函数
    public function prefixImgUrl($value,$data)
        //读取器 get Attr 读取get中间的这个
        //  $value 就是获取的值
        // $data就是获取该值所在的对象的全部属性
    {
        $finalUrl = $value;
        if($data['from'] == 1) {
            //此处根据from字段判断拼接的url属于本地还是网络
            $finalUrl = config('setting.img_prefix').$value;
        }
        return $finalUrl;
    }

}