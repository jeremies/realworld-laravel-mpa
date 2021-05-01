<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArticleLikesController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\ProfileController;
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

Route::get('/global', [ArticleController::class, 'index'])->name('global');

Route::get('/@{user:username}', [ProfileController::class, 'show'])->name(
    'profile'
);

Route::middleware('auth')->group(function () {
    Route::get('/feed', [ArticleController::class, 'feed'])->name('feed');
    Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
    Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');

    Route::post(
        '/@{user:username}/follow',
        [FollowController::class, 'store']
    )->name('follow');

    Route::get('/settings', [ProfileController::class, 'edit'])->name('settings');

    Route::patch('/settings', [ProfileController::class, 'update']);

    Route::post('/articles/{article:slug}/like', [ArticleLikesController::class, 'store']);
    Route::delete('/articles/{article:slug}/like', [ArticleLikesController::class, 'destroy']);


});

require __DIR__ . '/auth.php';
