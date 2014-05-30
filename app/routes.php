<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('login', 'AuthController@showLogin');
Route::post('login', 'AuthController@postLogin');
Route::get('logout', 'AuthController@getLogout');

Route::group(array('before'=>'auth'), function () {
    
  Route::get('/', function()
  {
//     $items = UserTable::all();
//     $item = Object::create(['class_id'=>'1', 'caption'=>"Вася"]);
    
  
    $results = DB::select('select * from class where id = ?', array(1));
    Debugbar::log($results);
    Debugbar::error("Test Error!");
    
  	return View::make('hello', ["message" => "Hello Peoples!"]);
  });
});
