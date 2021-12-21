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

Route::get('/', 'MainController@home');
Route::get('/about', 'MainController@about');
Route::get('/reviews', 'MainController@reviews')->name('/reviews');
Route::post('/reviews/check', 'MainController@review_check');


Route::name('user.')->group(function() // добавляем префикс user. ко всем url и группируем их
{
    Route::view('/private', 'private')->middleware('auth')->name('private'); //Страница, которая доступна только авторизованным

    Route::get('/signin', function() //страница логина
    {   
        //Проверка. Если авторизованный юзер пытается перейти на /signin, сразу редиректит на /user.privat
        if(Auth::check()){return redirect(route('user.private'));} 
        return view('signin'); 
    })->name('signin');

    

    Route::get('/sign-up', function() //страница регистрации
    {   
        //Проверка. Если авторизованный юзер пытается перейти на /signin, сразу редиректит на /user.privat
        if(Auth::check()){return redirect(route('user.private'));}
        return view('sign-up');
    })->name('sign-up');




    //Route::post('signin', []);
    //Route::post('logout', [])->name('logout');
    //Route::post('sign-up', []);
    
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
