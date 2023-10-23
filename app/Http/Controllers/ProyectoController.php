<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyecto;


class ProyectoController extends Controller
{
    public function todos(){
        return view('paginaPrincipal', ['lista_de_proyectos' => Proyecto::all()]);
    }

    public function nuevo(Request $formdata){
        $nuevo = new Proyecto;
        $nuevo->NombreProyecto    = $formdata->input('NombreProyecto'    );
        $nuevo->fuenteFondos      = $formdata->input('fuenteFondos'      );
        $nuevo->MontoPlanificado  = $formdata->input('MontoPlanificado'  );
        $nuevo->MontoPatrocinado  = $formdata->input('MontoPatrocinado'  );
        $nuevo->MontoFondosPropios= $formdata->input('MontoFondosPropios');
        $nuevo->save();
        return redirect()->route('homepage');
    }

    public function edita_este($identifier){
        $seleccion = Proyecto::find($identifier);
        return view('paginaEdicion', ['proyecto' => $seleccion]);
    }

    public function editar(Request $formdata, $identifier){
        $nuevo = Proyecto::find($identifier);
        $nuevo->NombreProyecto    = $formdata->input('NombreProyecto'    );
        $nuevo->fuenteFondos      = $formdata->input('fuenteFondos'      );
        $nuevo->MontoPlanificado  = $formdata->input('MontoPlanificado'  );
        $nuevo->MontoPatrocinado  = $formdata->input('MontoPatrocinado'  );
        $nuevo->MontoFondosPropios= $formdata->input('MontoFondosPropios');
        $nuevo->save();
        return redirect()->route('homepage');
    }

    public function elimina_este($identifier){
        $seleccion = Proyecto::find($identifier);
        return view('paginaEliminacion', ['proyecto' => $seleccion]);
    }

    public function eliminar($identifier){
        $seleccion = Proyecto::find($identifier);
        $seleccion->delete();
        return redirect()->route('homepage');
    }

}





