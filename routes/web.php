<?php
use App\Http\Middleware\LocaleMiddleware;
Route::group(['prefix'=>LocaleMiddleware::getLocale()], function(){
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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::group(['prefix'=>'/admin', 'namespace'=>'Admin', 'middleware'=>'auth', 'role'], function(){ // 2е пункт 15 - 'middleware'php посредник
	Route::get('/', 'AdminController@dashboard');
	// создаем маршрутизацию
	Route::resource('/user', 'UserController'); // 40
	Route::get('/user-data', 'UserController@usersData')->name('users.data'); // 45 пункт 
	Route::resource('/category', 'CategoryController');
 	Route::get('/categoryData', 'CategoryController@categoryData')->name('category.data');
 	
 	Route::resource('/product', 'ProductController'); // 84
 	Route::get('/productData', 'ProductController@productData')->name('product.data');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/setlang/{lang}', function($lang){ 
	$url = Redirect::back()->getTargetUrl(); 
	$uri = parse_url($url, PHP_URL_PATH); 
	$uri = explode('/', $uri);
	if( in_array($uri[1], LocaleMiddleware::$langs) ) 
	{
		unset( $uri[1] );
	}
	if( $lang !=LocaleMiddleware::$mainLang)
	{
		array_splice($uri, 1, 0, $lang);
	}
	return redirect(implode($uri, '/'));
});

});


