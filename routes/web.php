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


use App\Task;

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/types', 'PagesController@types');
Route::get('/contacts', 'PagesController@contacts');
Route::get('/jalousie', 'PagesController@jalousie');
Route::get('/sew', 'PagesController@sew');
Route::get('/decor', 'PagesController@decor');
Route::get('/wallpapers', 'PagesController@wallpapers');
Route::get('/floor', 'PagesController@floor');
Route::get('/business', 'PagesController@business');
Route::get('/dealers', 'PagesController@dealers');

Route::get('/posts', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts/store', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');
Route::get('/posts/edit/{post}', 'PostsController@edit');
Route::post('/posts/update', 'PostsController@update');
Route::get('/posts/destroy/{post}', 'PostsController@destroy');
//Route::post('/posts/{post}/comments', 'CommentsController@store');

Route::get('/reviews', 'ReviewController@index');
Route::get('/reviews/create', 'ReviewController@create');
Route::post('/reviews/store', 'ReviewController@store');
Route::get('/reviews/edit/{review}', 'ReviewController@edit');
Route::post('/reviews/update', 'ReviewController@update');
Route::get('/reviews/destroy/{review}', 'ReviewController@destroy');

Route::get('/portfolio', 'PortfolioController@index');
Route::get('/portfolio/create', 'PortfolioController@create');
Route::post('/portfolio/store', 'PortfolioController@store');
Route::get('/portfolio/destroy/{portfolio}', 'PortfolioController@destroy');

Route::post('/feedback/send_mail', 'FeedbackController@send_mail');
Route::post('/feedback/send_calc', 'FeedbackController@send_calc');
Route::post('/feedback/send_contacts', 'FeedbackController@send_contacts');

//Route::get('/register', 'RegistrationController@create');
//Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');

Route::group( ['middleware' => 'checkAuth' ], function(){
    Route::get('/admin', 'AdminController@index');
});

Route::get('/home', 'PagesController@index');
