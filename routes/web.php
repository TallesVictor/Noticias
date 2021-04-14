<?php

use App\Http\Controllers\NoticiasController;
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
    $noticiasController = new NoticiasController();
    $noticiasController = $noticiasController->index();
    return view('home', ['noticias' => $noticiasController]);
});
Route::post('/create', [NoticiasController::class, 'create']);
Route::get('/noticia', function () {
    $noticiasController = new NoticiasController();
    $noticiasController = $noticiasController->index();
    return $noticiasController;
});

Route::get('/noticia/{id}', function (int $id) {
    $noticiasController = new NoticiasController();
    $noticiasController = $noticiasController->show($id);
    return $noticiasController;
});

Route::get('/noticia/search/{titulo}', [NoticiasController::class, 'search']);
