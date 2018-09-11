<?php

namespace app\api\controller\v1;

use app\api\model\Banner as BannerModel;
use app\api\validate\IDCollection;
use app\lib\exception\BannerMissException;

class Banner
{
    /**
     * 获取指定id的banner信息
     * @url /banner/:id
     * @http GET
     * @id banner的id号
     *
     */
    public function getBannerList($ids='')
    {
        (new IDCollection())->goCheck();

        $ids = explode(',', $ids);
        $banner = BannerModel::getBannerById($ids);

        if (!$banner) {
            throw new BannerMissException();
        }

        return json($banner);
        
    }


}