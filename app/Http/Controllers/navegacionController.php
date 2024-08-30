<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\libro;
class navegacionController extends Controller
{
    public function listarlibros(){
        $libros = libro::all();
        return view("listarlibros",['libros'=>$libros]);
    }
    public function vacercade(){
        return view("vacercade");
    }
    public function vinicio(){
        return view("vinicio");
    }
    public function vlibros(){
        return view("vlibros");
    }

}
