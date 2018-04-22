<?php
/**
 * Created by PhpStorm.
 * User: Gary
 * Date: 2018/4/22
 * Time: 10:07
 */

namespace app\index\controller;


use think\Controller;

class Student extends Controller
{
    public function test(){
        $this->assign('data','这个页面出错了，请确认');
        return $this->fetch('error');
    }
}