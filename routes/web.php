<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeController::class);

Route::get('cursos', [CursoController::class, 'index'])->name('cursos.index');
Route::get('cursos/create', [CursoController::class, 'create'])->name('cursos.create');
Route::post('cursos', [CursoController::class, 'store'])->name('cursos.store');
Route::get('cursos/{curso}', [CursoController::class, 'show'])->name('cursos.show');
Route::get('cursos/{curso}/edit', [CursoController::class, 'edit'])->name('cursos.edit');



//productos
/* Route::get('productos', [ProductoController::class, 'index']);
Route::get('productos/create', [ProductoController::class, 'create']);
Route::get('productos/{producto}', [ProductoController::class, 'show']); */

/* Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {
    if ($categoria) {
        echo "Bienvenido al: $curso, de la categoria: $categoria";
    } else {
        echo "Bienvenido al curso: $curso";
    }
}); */
