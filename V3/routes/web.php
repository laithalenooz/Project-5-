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

//Route::get('/test', 'postsController@test');

Route::get('/admin/index', function () {
    return view('dashboardviews.index');
});
Route::get('/', 'PostsController@home');
Route::get('/admin/login/show', 'Auth\AdminLoginController@showAdminLogin');
Route::post('/admin/login/submit', 'Auth\AdminLoginController@login');
Route::get('/admin/logout', 'Auth\AdminLoginController@logout');


/*
|
| Dashboard Manage Admin Routes
|
*/
Route::get('/admin/manageadmin', 'AdminsController@index');
Route::post('/admin/manageadmin/store', 'AdminsController@store');
Route::get('/admin/manageadmin/{id}/delete', 'AdminsController@destroy');
Route::get('/admin/manageadmin/{id}/edit', 'AdminsController@edit');
Route::post('/admin/manageadmin/{id}/update', 'AdminsController@update');

/*
|
| Dashboard Manage Categories Routes
|
*/
Route::get('/admin/categories/{id}', 'CategoriesController@destroy');
Route::get('/admin/edit/{id}', 'CategoriesController@updateView')->name('admin.edit');
Route::post('/admin/edit/{id}', 'CategoriesController@update')->name('admin.edit.submit');
Route::post('/admin/categories', 'CategoriesController@store');
Route::get('/admin/categories', 'CategoriesController@create');
Route::get('/categories', 'CategoriesController@CategoriesCreate');

/*
|
| Dashboard Manage Users Routes
|
*/
Route::get('/admin/manage_users', 'UsersController@index');
Route::get('/admin/user_delete/{id}', 'UsersController@destroy');

/*
|
| Dashboard Manage Posts Routes
|
*/
Route::get('/admin/manage_posts', 'PostsController@index');
Route::get('/admin/post_delete/{id}', 'PostsController@destroy');

///////////////////////////////////// Public Site /////////////////////////////////////////
Route::get('/submit-recipe', 'PostsController@show');

Route::post('/create_post', 'PostsController@create');
Route::get('/recipes/{id}', 'CategoriesController@ShowRecipes');
Route::get('/single/{id}', 'PostsController@SingleRecipes');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/author/{id}', 'UsersController@show');

Route::get('/user/{id}', 'UsersController@edit');
Route::get('/my_account/{id}', 'UsersController@showSingleUser');
Route::post('/user/{id}/update', 'UsersController@update');
Route::get('/about', function () {
    return view('public.about-us');
});
