<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productosController extends Controller
{
    public function Index()
    {
        return View('productos');
    }

    public function Mostrar()
    {
        echo 'Mostrar controlador vista'; 
    }

    public function Crear(){
        return View('crear'); 

    }

    public function Show($post){
        echo "Aca es: $post"; 
    }

    public function dataForm(Request $request){
        return $request->input('nombre');
    }
}
