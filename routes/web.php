<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DownloadController;

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

Route::get('/skills', function () {
    return view('skills');
});

Route::get('/blog', function () {
    return view('blog.index');
})->name('blog-index');

Route::get('/blog/gitdocs', function () {
    return view('blog.gitdocs');
})->name('gitdocs');


// Route::get('/blog/gitdocs', function () {
//     return view('blog.gitdocs');
// })->name('gitdocs');

/*
    As of Laravel 8, we can no longer use the following:
    Route::get('/download-resume', 'DownloadController@downloadResume')->name('downloadResume');
    We now use square brackets to declare Controller class. 
    Make sure to also include the controller at the top of web.php, otherwise have to use
    full path.
*/
Route::get('/download-resume', [DownloadController::class, 'downloadResume'])->name('downloadResume');

// React Router DOM
Route::view('/{path?}', 'welcome')->name('introPage');