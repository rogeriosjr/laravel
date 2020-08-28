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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function () {
    return view("Hello World!!");
});
Route::get('/produtos/{flag?}', function ($flag = '') {
    return "Todas as produtos: " . $flag ;
});
Route::get('/categoria/{flag}', function ($flag) {
    return "Categoria: " . $flag;
});

// Redirecionamento de rota
Route::redirect('/redirect3', '/redirect2'); // não está funcionando
Route::get('/redirect1', function () {
    return redirect('/redirect2');
});
Route::get('/redirect2', function () {
    return "Redirect 2: ";
});

Route::view('/view', 'welcome');

// Não funciona
Route::get('/redirect4', function () {
    return redirect()->route('url-name');
});
Route::get('/name-url', function () {
    return "Redirect name-url: ";
})->name('url.name');

// Ultilizando grupos de rotas e filtros
/*
Route::middleware([])->group(function () {
	
	Route::prefix('admin')->group(function () {

		Route::namespace('Admin')->group(function () {
			Route::get('/dashborad', 'TesteController@teste');
			Route::get('/financeiro', 'TesteController@teste');
			Route::get('/', 'TesteController@teste');
		});

	});

});
*/
Route::group([
	'middleware' => [],
	'prefix'     => 'admin',
	'namespace'	 => 'Admin'
], function () {
	Route::get('/dashborad', 'TesteController@teste');
	Route::get('/financeiro', 'TesteController@teste');
	Route::get('/', 'TesteController@teste');
});

Route::get('/login', function () {
    return "Fazer login";
})->name('login');

// Pode ser assim, mas tem maneiras mais fáceis
// Route::resource('products', 'ProductController');

Route::delete('products/{id}', 'ProductController@destroy')->name('products.destroy');
Route::put('produtcs/{id}', 'ProductController@update')->name('products.update');
Route::get('products/{id}/edit', 'ProductController@edit')->name('products.edit');
Route::get('products/create', 'ProductController@create')->name('products.create');
Route::get('products/{id}', 'ProductController@show')->name('products.show');
Route::get('produtcs', 'ProductController@index')->name('products.index');
Route::post('products/{id}/store', 'ProductController@save')->name('products.store');