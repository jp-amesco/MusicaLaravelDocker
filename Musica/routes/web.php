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
Route::get('teste', function(){
    $teste = Auth::user();
    $musica = App\Musica::find(1);
    $teste->musicas()->attach($musica);
    dd($teste->musicas);
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('banda/{banda}/{slug}', 'AlbumController@index'); 
Route::get('banda/{banda}/{slug}/{id}', 'MusicaController@index');
Route::post('favorito/{id}/{idmusica}', 'MusicaController@favorito');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('banda', 'BandaController');