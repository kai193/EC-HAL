<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisteredUserController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/Member', function () {
    return view('Member');
})->name('Member');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/E-sport', function () {
    return view('E-sport');
})->name('E-sport');

Route::get('/detail_music', function () {
    return view('detail_music');
})->name('detail_music');

Route::get('/programming', function () {
    return view('programming');
})->name('programming');

Route::get('/detail_Programming', function () {
    return view('detail_Programming');
})->name('detail_Programming');

Route::get('/cooking', function () {
    return view('cooking');
})->name('cooking');

Route::get('/music', function () {
    return view('music');
})->name('music');

Route::get('/language', function () {
    return view('language');
})->name('language');

Route::get('/design', function () {
    return view('design');
})->name('design');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');

Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');

// Route::get('/register', function () {
//     return view('auth.register');
// })->name('register');

// // ユーザー登録処理
// Route::post('/register', [RegisteredUserController::class, 'store'])->name('register.store');

require __DIR__.'/auth.php';

//商品一覧ページ表示

Route::get('/index',[WelcomeController::class, 'index'])->name('welcome');

//商品登録ページ

Route::get('/productCreate',[WelcomeController::class, 'productCreate'])->name('productCreate');

// ユーザー登録ページ表示

