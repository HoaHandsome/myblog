<?php

use Illuminate\Support\Facades\Route;
/*
|__________________________________________________________________________
| Web Routes
|__________________________________________________________________________
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home','HomeController@index')->name('home');
/* manage admin */

Route::get('logon', function () {
    return view('auth/logon');
});     
Route::get('registerr', function () {
    return view('auth/registerr');
});     



Route::group(['prefix' => 'admin'], function () {
    /* Show and edit article */
    Route::get('','AdminController@show_dashboard')->name('admin_show_dashboard');
    Route::get('view_article/{slug}','AdminController@view_article')->name('admin_view_article');
    Route::get('manager_article','AdminController@manager_article')->name('admin_manager_article');
    Route::get('create_article','AdminController@create_article')->name('admin_create_article');
    Route::post('save_article','AdminController@save_article')->name('admin_save_article');
    Route::get('delete_article/{id}','AdminController@delete_article')->name('admin_delete_article');
    Route::get('edit_article/{slug}','AdminController@edit_article')->name('admin_edit_article');
    Route::post('save_as_article/{slug}','AdminController@save_as_article')->name('admin_save_as_article');
    /* Show and delete category */
    Route::get('manager_category','AdminController@manager_category')->name('admin_manager_category');
    Route::get('create_category','AdminController@create_category')->name('admin_create_category');
    Route::post('save_category','AdminController@save_category')->name('admin_save_category');
    Route::get('edit_category/{slug}','AdminController@edit_category')->name('admin_edit_category');
    Route::post('save_as_category/{id}','AdminController@save_as_category')->name('admin_save_as_category');
    Route::get('delete_category/{id}','AdminController@delete_category');
    /* Show and delete comment */
    Route::get('comment','AdminController@show_comment')->name('admin_show_comment');
    Route::get('user','AdminController@show_user')->name('admin_show_user');
    Route::get('delete_comment/{id}','AdminController@delete_comment');
    
});
/* show all main */
Route::group(['prefix' => ''], function () {
    Route::get('home','MainController@show_home');
    Route::get('about','MainController@show_about');
    Route::get('experience','MainController@show_experience');
    Route::get('blog','MainController@show_blog');
    Route::get('contact','MainController@show_contact');
});
/* Show article */
Route::group(['prefix' => 'blog'], function () {
    /* show article in blog */
    Route::get('article/{slug}', 'BlogController@show_article')->name('show_article');
    Route::get('search', 'BlogController@search_article')->name('search_article');
    Route::get('category/{id}', 'BlogController@category_article');
    /* Show article in category */
    Route::get('category','BlogController@show_category');
    /* Show article where user */
    /*  Route::get('article/user/{id}', 'BlogController@show_article_user'); */
});





Route::get('test', function ()
{
   return view('admin/article/layout'); 
});

Route::get('/login-facebook', 'SocialController@facebookRedirect')->name('login_facebook');
Route::get('/facebook_callback', 'SocialController@loginWithFacebook');

Route::get('/login-google', 'SocialController@googleRedirect')->name('login_google');
Route::get('/google_callback', 'SocialController@loginWithGoogle');


 Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
     \UniSharp\LaravelFilemanager\Lfm::routes();
 });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
