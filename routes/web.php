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

use  App\Http\Controllers\PostingController;
use  App\Http\Controllers\UserControllers;


// Route::get('/konten/{judul}', [PostingController::class, 'index']);

// Route::resource('/konten', PostingController::class);



Route::get('/', function () {
    return view('website.index');
});

Route::get('/backup', [PostingController::class, 'backupData']);

// Route::resource('/latihan', akun::class);


Route::get('/berita', function (){
    $judul = '<b>Mandiri<b>';
    $penulis = 'Ahmad Fadli Tambunan';
    return view('website.berita', compact('judul', 'penulis'));
});

Route::resource('/pengguna', UserControllers::class);

// Route::get("profile", function() {
//     return '<h2>Haloo</h2>';
// });

// Route::get('hubungi', function () {
//     return view('kontak');
// });

// Route::get('templatemo', function(){
//     return view('blog');
// });

// Route::get('about', function(){
//     return view('about');
// });

// Route::get('article', function(){
//     return view('article');
// });

Route::get('/articles/blogs/{article}', function ($slug) {
    // return view('article');
    $path = __DIR__ . "/../resources/articles/{$slug}.html";

    if(! file_exists($path))
    {
        // return direct('/');
        // dd('File Tidak Ditemukan');
        ddd('File Tidak Ditemukan');
    }

    $article = file_get_contents($path);

    return view('article',[
        'article'=>$article
    ]);
});


// Route::get('fadli', function(){
//     return view('quiz');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
