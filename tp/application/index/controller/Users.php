<?php
/**
 * Created by PhpStorm.
 * User: Gary
 * Date: 2018/4/23
 * Time: 21:22
 */

namespace app\index\controller;


use think\Controller;

class Users extends Controller
{
    /**
     * 显示注册页面
     * @return mixedx
     */
    public function register()
    {
        return $this->fetch();
    }

    /**
     * 显示登录页面
     * @return mixed
     */
    public function login()
    {
        return $this->fetch();
    }

}