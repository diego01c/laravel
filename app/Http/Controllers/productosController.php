<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class productosController extends Controller
{
    public function getPDF(){
        $name="Juan";
        $pdf= PDF::loadView('PDF_ex', compact('name'));
        return $pdf->download('prueba.pdf');

    }


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
