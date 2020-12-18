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

Route::get('/home', 'HomeController@index')->name('home');
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
    Route::get('article','AdminController@show_article')->name('admin_show_article');
    Route::get('create_article','AdminController@create_article')->name('admin_create_article');
    Route::get('edit_article/{id}','AdminController@edit_article');
    Route::get('delete_article/{id}','AdminController@delete_article');
    /* Show and delete category */
    Route::get('category','AdminController@show_category')->name('admin_show_category');
    Route::get('create_category','AdminController@create_category')->name('admin_create_category');
    Route::get('edit_category/{id}','AdminController@edit_article');
    Route::get('delete_category/{id}','AdminController@delete_article');
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
    Route::get('article', 'BlogController@view_article');
    Route::get('article/{id}', 'BlogController@show_article');

    /* Show article in category */
    Route::get('category','BlogController@view_category');
    Route::get('category/{id}','BlogController@show_category');
    /* Show article where user */
     Route::get('article/user/{id}', 'BlogController@show_article_user');

});
Route::get('test', function ()
{
   return view('admin/article/layout'); 
});