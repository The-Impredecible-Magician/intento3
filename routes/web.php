<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MkController;

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

Route::get('mk', MkController::class);

Route::controller(CursoController::class)
    ->group(function () {
        Route::get('cursos', [CursoController::class, 'index']);
        Route::get('cursos/create', [CursoController::class, 'create']);
        Route::get('cursos/{curso}', [CursoController::class, 'show']);
    });



/*Route::get('cursos/{curso}/{categoria?}', function($curso, $categoria = null) {
    if($categoria){
        return "welcome to: $curso course in the $categoria category";
    }
    else{return "welcome to: $curso course";
    }
    
});*/
