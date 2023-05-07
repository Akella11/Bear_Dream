<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovingController extends Controller
{
    public function main(){
        return view('index');
    }
    public function information(){
        return view('Bear_Dream_Information');
    }
    public function conteiner(){
        return view('Bear_Dream_Conteiner');
    }
}
