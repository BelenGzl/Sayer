<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//altacategoria
Route::get('/altacategoria','sayer1@altacategoria');
Route::POST('/guardacategoria','sayer1@guardacategoria')->name('guardacategoria');
Route::get('/reportecategoria','sayer1@reportecategoria');
Route::get('/borracatetegoria/{id_Cat}','sayer1@borracategoria')->name('borracatetegoria');
Route::get('/modificacategoria/{id_Cat}','sayer1@modificacategoria')->name('modificacategoria');

//altaproducto
Route::get('/altaproducto','sayer2@altaproducto');
Route::POST('/guardaproducto','sayer2@guardaproducto')->name('guardaproducto');
Route::get('/reporteproducto','sayer2@reporteproducto');
Route::get('/borraproducto/{id_Prod}','sayer2@borraproducto')->name('borraproducto');
Route::get('/modificaproducto/{id_Prod}','sayer2@modificaproducto')->name('modificaproducto');

//altamunicipio
Route::get('/altamunicipio','sayer3@altamunicipio');
Route::POST('/guardamunicipio','sayer3@guardamunicipio')->name('guardamunicipio');
Route::get('/reportemunicipio','sayer3@reportemunicipio');
Route::get('/borramunicipio/{id_Mun}','sayer3@borramunicipio')->name('borramunicipio');
Route::get('/modificamunicipio/{id_Mun}','sayer3@modificamunicipio')->name('modificamunicipio');

//altaproveedor
Route::get('/altaproveedor','sayer4@altaproveedor');
Route::POST('/guardaproveedor','sayer4@guardaproveedor')->name('guardaproveedor');
Route::get('/reporteproveedor','sayer4@reporteproveedor');
Route::get('/borraproveedor/{id_Prov}','sayer4@borraproveedor')->name('borraproveedor');
Route::get('/modificaproveedor/{id_Prov}','sayer4@modificaproveedor')->name('modificaproveedor');

//altacliente
Route::get('/altacliente','sayer5@altacliente');
Route::POST('/guardacliente','sayer5@guardacliente')->name('guardacliente');
Route::get('/reportecliente','sayer5@reportecliente');
Route::get('/borracliente/{id_Cli}','sayer5@borracliente')->name('borracliente');
Route::get('/modificacliente/{id_Cli}','sayer5@modificacliente')->name('modificacliente');

//altatrabajador
Route::get('/altatrabajador','sayer6@altatrabajador');
Route::POST('/guardatrabajador','sayer6@guardatrabajador')->name('guardatrabajador');
Route::get('/reportetrabajador','sayer6@reportetrabajador');
Route::get('/borratrabajador/{id_Tra}','sayer6@borratrabajador')->name('borratrabajador');
Route::get('/modificatrabajador/{id_Tra}','sayer6@modificatrabajador')->name('modificatrabajador');

//altafactura
Route::get('/altafactura','sayer7@altafactura');
Route::POST('/guardafactura','sayer7@guardafactura')->name('guardafactura');
Route::get('/reportefactura','sayer7@reportefactura');
Route::get('/borrafactura/{id_Fac}','sayer7@borrafactura')->name('borrafactura');
Route::get('/modificafactura/{id_Fac}','sayer7@modificafactura')->name('modificafactura');

//altacompra
Route::get('/altacompra','sayer8@altacompra');
Route::POST('/guardacompra','sayer8@guardacompra')->name('guardacompra');

//altaventa
Route::get('/altaventa','sayer9@altaventa');
Route::POST('/guardaventa','sayer9@guardaventa')->name('guardaventa');















