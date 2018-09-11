<?php
/**
 * Created by JUST Practise!
 * User: Azal.zzw
 * Date: 2018/9/11
 * Time: 14:16
 */

namespace app\api\controller\v1;


use app\api\validate\IDMustBePostiveInt;
use app\api\model\Edit as EditModel;

class Edit
{
    /**
     * 获取个人修改信息页面
     * @url /edit/id/:id
     * @http GET
     */

    public function getEditInfo($id)
    {
        (new IDMustBePostiveInt())->goCheck();

        $edit = EditModel::getEditInfoById($id);
    }

}