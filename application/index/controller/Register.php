<?php

namespace app\index\controller;

use think\Controller;
use think\Request;
use app\common\validate\User as UserValidate;

class Register extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        return view('index');
    }

    public function save()
    {
        $data = input('post.');
        $validate = new UserValidate();
        if (!$validate->check($data)) {
            //dump($validate->getError());
            $this->error($validate->getError());
        }
    }
}
