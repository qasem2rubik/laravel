<?php
Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
Route::controllers([
    'lists' => 'ListsController',
    'tasks' => 'TasksController',
]);
Route::get('blog/category/{category}/{subcategory}', 'BlogController@category');