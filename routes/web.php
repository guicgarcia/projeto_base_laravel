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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.'], function(){

	/** Formulário de Login */
	Route::get('/login', 'AuthController@showLoginForm')->name('login');
	Route::post('/login', 'AuthController@login')->name('login.do');

	/** Logout */
    Route::get('logout', 'AuthController@logout')->name('logout');
     Route::get('block', 'AuthController@blockAccess')->name('blockAccess');
    
    /** Cadastro público */
	Route::get('cadastrar', 'UserController@register')->name('register');

	/** Rotas protegidas */
	/**-------------------------------------------------------------------------*/
		/** Home */
		Route::get('home', 'HomeController@home')->name('home');

		/** Usuários */
		Route::resource('users', 'UserController');

		/** Categoria Imagem */
		Route::resource('cat-imagem', 'CatImagemController');

		/** Imagens */
		Route::resource('imagens', 'ImagemController');
	/**-------------------------------------------------------------------------*/

});