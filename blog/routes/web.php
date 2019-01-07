<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('/',function(){
    return 'Index page';
});

Route::get('/help', function() {
    return route('bar1');
});

Route::get('/bar', function() {
    //
})->name('bar1');

Route::match(['get', 'post'],'/foo', function () {
    // 该路由将匹配 get 和 post 方法的 'foo' url
});


Route::get('hello/{name?}', function ($name = null) {
    return 'Hello! '.$name;
});

Route::any('/help1', function() {
    // 该路由将匹配 所有 类型的 'foo' url
})->name('any');


Route::group(['middleware'=>'auth'],function(){
    Route::get('/',function(){

    });
    Route::get('name',function(){

    });
});

Route::group(['namespace' => 'Admin'], function()
{
    // 控制器在「App\Http\Controllers\Admin」命名空间

    Route::group(['namespace' => 'User'], function()
    {
        // 控制器在「App\Http\Controllers\Admin\User」命名空间
    });
});


//前缀
Route::group(['prefix' => 'user'], function () {
    Route::get('name', function ()    {
        //
    });
    Route::get('age', function ()    {
        //
    });
    Route::get('introduction', function ()    {
        //
    });
});

Route::get('hello/{name?}', function ($name = 'Tom') {
    return 'Hello! '.$name;
})->where('name','[A-Za-z]+');