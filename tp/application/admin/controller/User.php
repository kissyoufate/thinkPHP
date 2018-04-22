<?php
/**
 * Created by PhpStorm.
 * User: Gary
 * Date: 2018/4/22
 * Time: 10:11
 */

namespace app\admin\controller;

use app\index\controller\Student;
use think\Controller;

class User extends Controller
{
    public function index(){
        return '1';
    }

    public function allUsers(){
        $username = input('?request.username');
        dump(input('server.'));
        return input('request.username');
    }

}