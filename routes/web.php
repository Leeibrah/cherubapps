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

Route::get('/dashboard', function () {
    return view('back.dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


// frontend pages
Route::get('/', 'PageController@index')->name('home');
Route::get('/who-we-are', 'PageController@whoWeAre')->name('who-we-are');
Route::get('/what-we-do', 'PageController@whatWeDo')->name('what-we-do');
Route::get('/insights', 'PageController@insights')->name('insights');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/contact', 'PageController@contact')->name('contact');
Route::post('/contact', 'PageController@sendContact')->name('contact.send');
Route::get('/posts', 'PageController@posts')->name('posts');
Route::get('/posts/{post}', 'PageController@showPost')->name('posts.view');
Route::get('/category/{category}', 'PageController@showCategory')->name('categories.view');
Route::get('/privacy-policy', 'PageController@privacy')->name('privacy');
Route::get('/terms-of-use', 'PageController@terms')->name('terms');

// admin pages
Route::group(['prefix' => '/admin', 'middleware' => 'auth'], function () {
    Route::resource('posts','PostController');
    Route::resource('categories','CategoryController')->except('show');
    Route::resource('authors','AuthorController');
});


Route::get('admin', 'Admin\AdminController@index')->name('admin');
Route::resource('admin/roles', 'Admin\RolesController');
Route::resource('admin/permissions', 'Admin\PermissionsController');
Route::resource('admin/users', 'Admin\UsersController');
Route::resource('admin/pages', 'Admin\PagesController');
Route::resource('admin/activitylogs', 'Admin\ActivityLogsController')
    ->only(['index', 'show', 'destroy']);
Route::resource('admin/settings', 'Admin\SettingsController');
Route::get('admin/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@getGenerator']);
Route::post('admin/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@postGenerator']);
