<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/i', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
    Route::get('/',[
        'as' => 'category',
        'uses' => 'Web\CategoryController@Category'
    ]);

    Route::get('index',[
        'as' => 'index',
        'uses' => 'Web\IndexController@Index'
    ]);
    Route::get('strtoimg',[
        'as' => 'web.strtoimg',
        'uses' => 'Web\IndexController@Strtoimg'
    ]);

    Route::get('category',[
        'as' => 'category',
        'uses' => 'Web\CategoryController@Category'
    ]);

    Route::post('category',[
        'as' => 'post.category',
        'uses' => 'Web\CategoryController@postAddcategory'
    ]);

    Route::get('editmd',[
        'as' => 'web.editmd',
        'uses' => 'Web\EditmdController@Editmd'
    ]);

    Route::get('editmdfull',[
        'as' => 'web.editmdfull',
        'uses' => 'Web\EditmdController@Editmdfull'
    ]);

    Route::get('users',[
        'as' => 'web.users',
        'uses' => 'Web\UsersController@getUsers'
    ]);

    Route::post('users',[
        'as' => 'post.users',
        'uses' => 'Web\UsersController@postUsers'
    ]);

    /*
     * 验证码
     */
    Route::get('kit/captcha/{tmp}', 'Web\KitController@captcha');
    Route::get('imgzn/{str}', 'Web\IndexController@imgzn');

    /*
     * 图片上传
     */
    Route::post('uploader',[
        'as' => 'web.uploader',
        'uses' => 'Web\UploaderController@postUploader'
    ]);

    /*
     * 图片上传回调
     */
    Route::get('upcallback',[
        'as' => 'web.upcallback',
        'uses' => 'Web\UploaderController@Upcallback'
    ]);

    Route::get('mail/sendReminderEmail/{id}','Web\MailController@sendReminderEmail');

    /**
     * ioredis
     */
    Route::get('ioredis',[
        'as' => 'web.ioredis',
        'uses' => 'Web\ioredisController@ioredis'
    ]);

    /**
     * 事件广播测试
     */
    Route::get('/event', function(){
        Event::fire(new \App\Events\SomeEvent(5555));
        return "hello world";
    });
});
