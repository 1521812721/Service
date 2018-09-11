<?php
/**
 * Created by JUST Practise!
 * User: Azal.zzw
 * Date: 2018/9/10
 * Time: 18:39
 */

namespace app\api\controller\v1;

use app\api\model\Category as CategoryModel;
use app\lib\exception\CategoryException;


class Category
{
    /**
     * 获取指定分类信息
     * @url /category/all
     * @http GET
     */
    public function getCategoryList()
    {
        $result = CategoryModel::getCategoryList();
        if (!$result) {
            throw new CategoryException();
        }
        return json($result);
    }

}