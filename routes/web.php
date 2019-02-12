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

Route::get('/', function () {
    return view('layouts.tartifly');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/message', function () {
    return view('message');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/voyages', 'SejourController@show' );

Route::get('/voyages/{id?}', 'SejourController@getSejour' );

//Route::resource('/admin/comments', 'CommentController@create' );

Route::group(['prefix' => 'admin'], function(){
  Route::get('/sejour', 'CommentController@index');
  Route::get('/sejour/{id?}', 'CommentController@show');
  Route::get('/sejour/store', 'CommentController@store');
  Route::get('/sejour/update', 'CommentController@update');
});

/*Route::get('user/{id}', function ($id) {
    return 'user '.$id ;
})-> name('utilisateur');

Route::get('/user/{id}/comments/{comment}', function ($id,$comment) {
    return 'page voyage id: '.$id.' / '.$comment ;
});


Route::get('/{id}', function ($id) {
    return view('gretting', ['id' => '$id']);
}); // acceder a la variable {{ $id }}

Route::get('user/{id}', function ($id) {
    return controller@;
}); // acceder a la variable {id}

Route::group['prefix => 'admin'], function(){
  Route::get('users', function ($id) {

  });
  Route::get('home', function ($id) {
      return controller@;
  });
});

*/
