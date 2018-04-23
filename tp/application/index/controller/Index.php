<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller
{
    /**
     * 显示网站首页
     * @return mixed
     */
    public function index()
    {
        return $this->fetch();
    }
}
