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


Route::get('/', function () {
    return view('welcome');
});

//Route::auth();

Route::get('/home', 'HomeController@index');

*/
Route::group(['prefix'=>'categorias', 'where'=>['id'=>'[0-9]+']], function(){

    Route::any('', ['as' =>'categorias', 'uses'=>'CategoriasController@index']);
    Route::get('create',['as'=>'categorias.create', 'uses'=>'CategoriasController@create']);    
    Route::get('{id}/destroy', ['as'=>'categorias.destroy', 'uses'=>'CategoriasController@destroy']);    
    Route::get('{id}/edit', ['as'=>'categorias.edit', 'uses'=>'CategoriasController@edit']);    
    Route::put('{id}/update',['as'=>'categorias.update', 'uses'=>'CategoriasController@update']);  
    Route::post('store',['as'=>'categorias.store', 'uses'=>'CategoriasController@store']);        
    

    //masterdetail
    Route::get('createMaster', ['as'=>'categorias.createMaster', 'uses'=>'CategoriasController@createMaster']);
    Route::post('masterDetail', ['as'=>'categorias.masterDetail', 'uses'=>'CategoriasController@masterDetail']);


});

//Rota para Clientes

Route::group(['prefix'=>'clientes', 'where'=>['id'=>'[0-9]+']], function(){

    Route::get('', ['as' =>'clientes', 'uses'=>'ClientesController@index']);
    Route::get('create',['as'=>'clientes.create', 'uses'=>'ClientesController@create']);    
    Route::get('{id}/destroy', ['as'=>'clientes.destroy', 'uses'=>'ClientesController@destroy']);    
    Route::get('{id}/edit', ['as'=>'clientes.edit', 'uses'=>'ClientesController@edit']);    
    Route::put('{id}/update',['as'=>'clientes.update', 'uses'=>'ClientesController@update']);  
    Route::post('store',['as'=>'clientes.store', 'uses'=>'ClientesController@store']);        
    
//masterdetail
Route::get('createMaster', ['as'=>'clientes.createMaster', 'uses'=>'ClientesController@createMaster']);
Route::post('masterDetail', ['as'=>'clientes.masterDetail', 'uses'=>'ClientesController@masterDetail']);


});
//rota para cidades
Route::group(['prefix'=>'cidades', 'where'=>['id'=>'[0-9]+']], function(){

    Route::get('', ['as' =>'cidades', 'uses'=>'CidadesController@index']);
    Route::get('create',['as'=>'cidades.create', 'uses'=>'CidadesController@create']);    
    Route::get('{id}/destroy', ['as'=>'cidades.destroy', 'uses'=>'CidadesController@destroy']);    
    Route::get('{id}/edit', ['as'=>'cidades.edit', 'uses'=>'CidadesController@edit']);    
    Route::put('{id}/update',['as'=>'cidades.update', 'uses'=>'CidadesController@update']);  
    Route::post('store',['as'=>'cidades.store', 'uses'=>'CidadesController@store']);        
    


});


//rota para estados

Route::group(['prefix'=>'estados', 'where'=>['id'=>'[0-9]+']], function(){

    Route::get('', ['as' =>'estados', 'uses'=>'EstadosController@index']);
    Route::get('create',['as'=>'estados.create', 'uses'=>'EstadosController@create']);    
    Route::get('{id}/destroy', ['as'=>'estados.destroy', 'uses'=>'EstadosController@destroy']);    
    Route::get('{id}/edit', ['as'=>'estados.edit', 'uses'=>'EstadosController@edit']);    
    Route::put('{id}/update',['as'=>'estados.update', 'uses'=>'EstadosController@update']);  
    Route::post('store',['as'=>'estados.store', 'uses'=>'EstadosController@store']);        
    
//masterdetail
Route::get('createMaster', ['as'=>'estados.createMaster', 'uses'=>'EstadosController@createMaster']);
Route::post('masterDetail', ['as'=>'estados.masterDetail', 'uses'=>'EstadosController@masterDetail']);


});




    //return "<h1>tela de cadastro de categorias";

Auth::routes();
Route::get('/', 'CategoriasController@index')->name('categorias');

//rota para SubCategorias
Route::group(['prefix'=>'subCategorias', 'where'=>['id'=>'[0-9]+']], function(){

    Route::get('', ['as' =>'subCategorias', 'uses'=>'SubCategoriasController@index']);
    Route::get('create',['as'=>'subCategorias.create', 'uses'=>'SubCategoriasController@create']);    
    Route::get('{id}/destroy', ['as'=>'subCategorias.destroy', 'uses'=>'SubCategoriasController@destroy']);    
    Route::get('{id}/edit', ['as'=>'subCategorias.edit', 'uses'=>'SubCategoriasController@edit']);    
    Route::put('{id}/update',['as'=>'subCategorias.update', 'uses'=>'SubCategoriasController@update']);  
    Route::post('store',['as'=>'subCategorias.store', 'uses'=>'SubCategoriasController@store']);


});

//rota para Profissionals

Route::group(['prefix'=>'profissionals', 'where'=>['id'=>'[0-9]+']], function(){

    Route::get('', ['as' =>'profissionals', 'uses'=>'ProfissionalsController@index']);
    Route::get('create',['as'=>'profissionals.create', 'uses'=>'ProfissionalsController@create']);    
    Route::get('{id}/destroy', ['as'=>'profissionals.destroy', 'uses'=>'ProfissionalsController@destroy']);    
    Route::get('{id}/edit', ['as'=>'profissionals.edit', 'uses'=>'ProfissionalsController@edit']);    
    Route::put('{id}/update',['as'=>'profissionals.update', 'uses'=>'ProfissionalsController@update']);  
    Route::post('store',['as'=>'profissionals.store', 'uses'=>'ProfissionalsController@store']);


});

//serviços


Route::group(['prefix'=>'servicos', 'where'=>['id'=>'[0-9]+']], function(){

    Route::get('', ['as' =>'servicos', 'uses'=>'ServicosController@index']);
    Route::get('create',['as'=>'servicos.create', 'uses'=>'ServicosController@create']);    
    Route::get('{id}/destroy', ['as'=>'servicos.destroy', 'uses'=>'ServicosController@destroy']);    
    Route::get('{id}/edit', ['as'=>'servicos.edit', 'uses'=>'ServicosController@edit']);    
    Route::put('{id}/update',['as'=>'servicos.update', 'uses'=>'ServicosController@update']);  
    Route::post('store',['as'=>'servicos.store', 'uses'=>'ServicosController@store']);        
    
//masterdetail
Route::get('createMaster', ['as'=>'servicos.createMaster', 'uses'=>'ServicosController@createMaster']);
Route::post('masterDetail', ['as'=>'servicos.masterDetail', 'uses'=>'ServicosController@masterDetail']);


});








Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//         Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});