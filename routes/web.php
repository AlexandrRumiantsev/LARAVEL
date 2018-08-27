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
Route::get('/', 'PagesController@index');
Route::get('/lol', 'PagesController@lol');
//Route::get('/', function () {
//    return view('welcome');
//    //Возвращает строку при заходе на базовую ссылку
//    //return "Hello world";
//});


Route::get('/hello', function () {
    return "hello";
});

//Отображение статической страницы созданной в шаблонизаторе
Route::get('/user', function () {
    return view('pages.user');
});

//Передача гет параметров на страницу, которая создается динамически
Route::get('/test/{id}/{name}', function ($id,$name) {
    return 'This is ' .$name .' id = '.$id;
});

Route::post('/post', 'PostController@index');

Route::get('/form', function () {
    return view('pages.form');
});

Route::post('/add', 'FormController@add');

Route::get('/success', function () {
    return view('welcome');
});

Route::get('/connect', function () {
    return DB::connection()->getPdo();
});
    
