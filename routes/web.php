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
    if (auth()->user()) {
        return redirect(route('feed'));
    } else {
        return redirect(route('global'));
    }
})->name('home');

Route::get('/global', [\App\Http\Controllers\ArticleController::class, 'index'])->name('global');

Route::get('/@{user:username}', [\App\Http\Controllers\ProfileController::class, 'show'])->name(
    'profile'
);

Route::middleware('auth')->group(function () {
    Route::get('/feed', [\App\Http\Controllers\ArticleController::class, 'feed'])->name('feed');
});

require __DIR__ . '/auth.php';
