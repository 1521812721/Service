<?php
/**
 * Created by JUST Practise!
 * User: Azal.zzw
 * Date: 2018/9/10
 * Time: 19:25
 */

namespace app\api\controller\v1;


use app\api\validate\IDMustBePostiveInt;
use app\api\model\User as UserModel;
use app\lib\exception\UserException;

class User
{

    /**
     * 获取指定user信息
     * @url /
     * @http get
     * @id 用户id
     *
     */

    public function getUserInfo($id)
    {
        (new IDMustBePostiveInt())->goCheck();

        $user = UserModel::getUserInfoById($id);

        if (!$user) {
            throw new UserException();
        }
        return json($user);




    }

}