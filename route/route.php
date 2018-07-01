<?php
Route::get('think', function () {
    return 'hello,ThinkPHP5!';
});

Route::get('a', 'index/index/a');
Route::get('d', 'index/addd/a');

Route::get('init', 'base/admin/init');


//权限列表
Route::get('authlist', 'auth/index/index');
//添加用户组
Route::get('roleadd', 'auth/index/roleAdd');
//更新用户组
Route::post('roleupdate', 'auth/index/roleUpdate');

return [

];
