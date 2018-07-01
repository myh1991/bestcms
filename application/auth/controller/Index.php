<?php
namespace app\auth\controller;
use app\base\controller\Admin;
use think\Request;

class Index extends Admin
{
    public function index()
    {
        echo 33;
    }

    public function roleAdd()
    {
    	return $this->fetch();
    }

    public function roleUpdate(Request $request)
    {
        if($request->isPost()){
            $data = [
                'group_name' => $request->param('group_name')
            ];

            $validate = new \app\validate\Role;

            if (!$validate->check($data)) {
                $this->error($validate->getError());
            }
        }
    }

    
}
