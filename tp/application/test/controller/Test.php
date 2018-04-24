<?php
/**
 * Created by PhpStorm.
 * User: Gary
 * Date: 2018/4/24
 * Time: 22:14
 */

namespace app\test\controller;


use think\Controller;

class Test extends Controller
{
    /**
     * 多语言切换测试
     */
    public function langchange(){
        return $this->fetch('test');
    }

    public function langChangeHandle($lang){
        switch ($lang){
            case 'zh':{
                cookie('think_var','zh-cn');
            }
            break;
            case 'en':{
                cookie('think_var','en-us');
            }
            break;
        }
    }
}