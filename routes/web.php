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

/* Route::get('/', function () {
return view('index');
});

Route::get('/tentang', function () {
$nama = 'Wauputra';
return view('tentang', ['nama' => $nama]);
}); */

Route::get('/', 'PagesController@home');
Route::get('/tentang', 'PagesController@tentang');
Route::get('/riwayat', 'RiwayatController@index');

// Route::get('/historys', 'HistorysController@index');
// Route::get('/historys/create', 'HistorysController@create');
// Route::get('/historys/{his}', 'HistorysController@show');
// Route::post('/historys', 'HistorysController@store');
// Route::delete('/historys/{his}', 'HistorysController@destroy');
// Route::get('/historys/{his}/edit', 'HistorysController@edit');
// Route::patch('historys/{his}', 'HistorysController@update');

Route::resource('historys', 'HistorysController');
