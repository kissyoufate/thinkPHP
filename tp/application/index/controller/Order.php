<?php
/**
 * Created by PhpStorm.
 * User: Gary
 * Date: 2018/4/23
 * Time: 21:14
 */

namespace app\index\controller;


use think\Controller;

class Order extends Controller
{
    /**
     * 订单付款成功
     * @return mixed
     */
    public function order(){
        return $this->fetch('success');
    }

}