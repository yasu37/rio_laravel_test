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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

/*トップ */
Route::get('index', [PageController::class, 'index']);
/*RIOについて */
Route::get('about', [PageController::class, 'about']);
/*メニュー一覧 */
Route::get('menu/menu1', [PageController::class, 'menu1']);
Route::get('menu/menu2', [PageController::class, 'menu2']);
Route::get('menu/menu3', [PageController::class, 'menu3']);
Route::get('menu/menu4', [PageController::class, 'menu4']);
Route::get('menu/menu5', [PageController::class, 'menu5']);
Route::get('menu/menu6', [PageController::class, 'menu6']);
Route::get('menu/menu7', [PageController::class, 'menu7']);
Route::get('menu/menu8', [PageController::class, 'menu8']);
Route::get('menu/menu9', [PageController::class, 'menu9']);
/*質問 */
Route::get('question', [PageController::class, 'question']);
/*ニュース */
Route::get('news', [PageController::class, 'news']);
/*予約 */
Route::get('reserve', [PageController::class, 'reserve']);
/*コラム */
Route::get('column/column1', [PageController::class, 'column1']);

Route::get('test', [TestController::class, 'index']);

require __DIR__.'/auth.php';
