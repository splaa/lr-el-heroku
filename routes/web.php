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

Route::get('/', static function () {

    return redirect(route('home'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/cabinet', 'Cabinet\HomeController@index')->name('cabinet');

//Chat
Route::view('/chat', 'chat.chat-index')->name('chat');

//Todo: Переписать код маршрута '/messages' в Chat/MessageController
Route::post(
    '/messages',
    function (\Illuminate\Http\Request $request) {

//        \App\Events\Message::dispatch($request->input('body'));
        \App\Events\Message::dispatch($request->all('body'));
    }
);

//Post
Route::get('/posts','PostController@index');


// Для пробных испытаний
Route::view('test', 'test')->name('test');