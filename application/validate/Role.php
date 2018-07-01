<?php
namespace app\validate;
use think\Validate;

//角色认证
class Role extends Validate
{
    protected $rule =   [
        'group_name'  => 'require|max:25',   
    ];
    
    protected $message  =   [
        'group_name.require' => '名称必须',
        'group_name.max'     => '名称最多不能超过20个字符',
    ];
}