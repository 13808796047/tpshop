<?php

namespace app\common\validate;

use think\Validate;

class User extends Validate
{
    /**
     * 定义验证规则
     * 格式：'字段名'	=>	['规则1','规则2'...]
     *
     * @var array
     */	
	protected $rule = [
	    'username'=>'require|length:2,16',
        'email'=>'require|email',
        'password'=>'require|length:6,15',
        'password_confirm'=>'require|length:6,15|confirm:password',
        'captcha|captcha'=>'require|captcha'
    ];
    
    /**
     * 定义错误信息
     * 格式：'字段名.规则名'	=>	'错误信息'
     *
     * @var array
     */	
    protected $message = [
        'username.require'=>'用户名不能为空',
        'username.length'=>'用户名在2到16位'
    ];
}
