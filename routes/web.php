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

    Route::post(
        '/@{user:username}/follow',
        [\App\Http\Controllers\FollowController::class, 'store']
    )->name('follow');

    Route::get('/settings', [\App\Http\Controllers\ProfileController::class, 'edit'])->name('settings');

    Route::patch('/settings', [\App\Http\Controllers\ProfileController::class, 'update']);

    Route::post('/articles/{article:slug}/like', [\App\Http\Controllers\ArticleLikesController::class, 'store']);
    Route::delete('/articles/{article:slug}/like', [\App\Http\Controllers\ArticleLikesController::class, 'destroy']);
});


require __DIR__ . '/auth.php';
