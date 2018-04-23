<?php
/**
 * Created by PhpStorm.
 * User: Gary
 * Date: 2018/4/23
 * Time: 21:05
 */

namespace app\index\controller;


use think\Controller;

class Goods extends Controller
{
    /**
     * 显示商品列表
     * @return mixed
     */
    public function search(){
        return $this->fetch();
    }

    /**
     * 显示商品详情
     * @return mixed
     */
    public function introduction(){
        return $this->fetch();
    }
}