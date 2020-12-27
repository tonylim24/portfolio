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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', function () {
    return view('blog.index');
})->name('blog-index');

Route::get('/blog/gitdocs', function () {
    return view('blog.gitdocs');
})->name('gitdocs');

// Route::get('/download-resume', 'DownloadController@downloadResume')->name('downloadResume');
Route::get('/download-resume', [DownloadController::class, 'downloadResume'])->name('downloadResume');