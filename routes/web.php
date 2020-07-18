<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
}); */

Auth::routes();
Route::view('/', 'home')->name('home');


//Boutique Routes
Route::get('/addBoutique','BoutiqueController@index')->name('addBoutique');
Route::post('/addBoutique','BoutiqueController@store')->name('storeBoutique');
Route::get('/listeBoutique','BoutiqueController@liste')->name('listeBoutique');
Route::get('editBoutique/{id}','BoutiqueController@edit')->name('editBoutique');
Route::post('/updateBoutique/{id}','BoutiqueController@update')->name('updateBoutique');
Route::get('deleteBoutique/{id}','BoutiqueController@destroy')->name('deleteBoutique');

//Customer Routes
Route::get('/addClient','ClientController@index')->name('addClient');
Route::post('/addClient','ClientController@store')->name('storeClient');
Route::get('/listeClient','ClientController@liste')->name('listeClient');
Route::get('editClient/{id}','ClientController@edit')->name('editClient');
Route::post('/updateClient/{id}','ClientController@update')->name('updateClient');
Route::get('deleteClient/{id}','ClientController@destroy')->name('deleteClient');

//Delivery Man Routes
Route::get('/addFournisseur','FournisseurController@index')->name('addFournisseur');
Route::post('/addFournisseur','FournisseurController@store')->name('storeFournisseur');
Route::get('/listeFournisseur','FournisseurController@liste')->name('listeFournisseur');
Route::get('editFournisseur/{id}','FournisseurController@edit')->name('editFournisseur');
Route::post('/updateFournisseur/{id}','FournisseurController@update')->name('updateFournisseur');
Route::get('deleteFournisseur/{id}','FournisseurController@destroy')->name('deleteFournisseur');

//Articles Routes
Route::get('/addArticle','ArticleController@index')->name('addArticle');
Route::post('/addArticle','ArticleController@store')->name('storeArticle');
Route::get('/listeArticle','ArticleController@liste')->name('listeArticle');
Route::get('editArticle/{id}','ArticleController@edit')->name('editArticle');
Route::post('/updateArticle/{id}','ArticleController@update')->name('updateArticle');
Route::get('deleteArticle/{id}','ArticleController@destroy')->name('deleteArticle');

//Stock File Routes
Route::get('/addFstock','FstockController@index')->name('addFstock');
Route::post('/addFstock','FstockController@store')->name('storeFstock');
Route::get('/listeFstock','FstockController@liste')->name('listeFstock');
Route::get('editFstock/{id}','FstockController@edit')->name('editFstock');
Route::post('/updateFstock/{id}','FstockController@update')->name('updateFstock');
Route::get('deleteFstock/{id}','FstockController@destroy')->name('deleteFstock');
