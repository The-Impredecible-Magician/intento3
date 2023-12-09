<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('cursos', function() {
    return "Otra cosita mk";
});

Route::get('cursos/create', function(){
    return "Here you could create whatever you want";
});

/*Route::get('cursos/{curso}', function($curso){
    return "welcome to: $curso course";
});*/

Route::get('cursos/{curso}/{categoria?}', function($curso, $categoria = null) {
    if($categoria){
        return "welcome to: $curso course in the $categoria category";
    }
    else{return "welcome to: $curso course";
    }
    
});
