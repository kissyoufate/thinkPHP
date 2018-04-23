<?php
/**
 * Created by PhpStorm.
 * User: Gary
 * Date: 2018/4/23
 * Time: 21:18
 */

namespace app\index\controller;


use think\Controller;

class Cart extends Controller
{
    /**
     * 显示购物车页面
     */
    public function cart(){
        return $this->fetch('shopcart');
    }

}