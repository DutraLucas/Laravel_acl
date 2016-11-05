<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@dashboard');
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/dashboard', 'HomeController@dashboard');

//posts
Route::get('posts', 'PostsController@index');
Route::get('posts/cadastrar', 'PostsController@cadastrar');
Route::post('posts/insert', 'PostsController@insert');
Route::get('posts/editar/{post}', 'PostsController@editar');
Route::patch('posts/update/{post}', 'PostsController@update');
Route::get('posts/deletar/{post}', 'PostsController@deletar');
Route::get('posts/painel', 'PostsController@painel');

//Usuarios
Route::get('users/', 'UsersController@index');
Route::get('users/cadastrar', 'UsersController@cadastrar');
Route::post('users/insert', 'UsersController@insert');
Route::get('users/editar/{user}', 'UsersController@editar');
Route::patch('users/update/{uer}', 'UsersController@update');
Route::get('users/deletar/{user}', 'UsersController@deletar');
Route::get('users/visualizar/{user}', 'UsersController@view');
Route::post('users/user_role', 'UsersController@user_role');

//Acls
Route::get('acl/roles', 'Permissions_rolesController@roles');
Route::get('acl/permissions', 'Permissions_rolesController@permissions');
Route::get('acl/role_view/{role}', 'Permissions_rolesController@view_role');

Route::get('acl/role_cadastrar', 'Permissions_rolesController@cadastrar_role');
Route::get('acl/permission_cadastrar', 'Permissions_rolesController@cadastrar_permission');
Route::post('acl/role_insert', 'Permissions_rolesController@insert_role');
Route::post('acl/permission_insert', 'Permissions_rolesController@insert_permission');
Route::get('acl/role_delete/{role}', 'Permissions_rolesController@deletar_role');
Route::post('acl/role_permissions', 'Permissions_rolesController@role_permissions');
