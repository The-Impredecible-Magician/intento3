<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return "Otra cosita mk";
    }

    public function create(){
        return "Here you could create whatever you want";
    }

    public function show($curso){
        return "welcome to: $curso course";
    }
}
