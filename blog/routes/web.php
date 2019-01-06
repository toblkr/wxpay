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

Route::get('/help',function(){
    return 'Help Page';
});

Route::match(['get', 'post'],'/foo', function () {
    // 该路由将匹配 get 和 post 方法的 'foo' url
});


Route::get('name/{n1}/{n2}',function($name1,$name2){//按顺序传输给,$name1 $name2
    return 'I`m ' .$name2;
});