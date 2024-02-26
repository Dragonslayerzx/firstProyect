<?php

namespace App\Http\Controllers;  //ruta donde se encuentra el controlador

use Illuminate\Http\Request;    // equivalente a importar un paquete, especificamente la clase request


class HomeController extends Controller //extends es la herencia y hereda todo los elementos publicos
{
    //cremos un metodo
    public function show($nombre, $seccion = null){
        if($seccion != null){
            return 'Pagina de Clase ' .$nombre .' seccion: ' .$seccion; 
            }else{
                return 'Pagina de Clase ' . $nombre;
            }
    }

    public function inicio($nombre, $apellido){ //definimos en controlador y esperar un parametro
        return view ('clases', compact('nombre', 'apellido')); //no es necesario poner el blade, parametro nombre ya disponible en la vista clases
    }


}
