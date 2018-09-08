<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;




class ClienteController extends Controller
{
    public function index(Request $request)
    {
       // if (!$request->ajax()) return redirect('/');
        $buscar = $request->buscar;
        $criterio = $request->criterio;
        if ($buscar ==''){


            // EN ESTE LUGAR PAGINAMOS CUANTA INFORMACION QUEREMOS EN NUESTRA VISTA

            $personas = Persona::orderBy('id', 'desc')->paginate(5);
        }
        else{
            $personas = Persona::where($criterio, 'like', '%'.$buscar.'%')->orderBy('id','desc')->paginate(3);
        }
        return [
            'pagination'=> [
                'total'         =>  $personas ->total(),
                'current_page'  =>  $personas ->currentPage(),
                'per_page'      =>  $personas ->perPage(),
                'last_page'     =>  $personas ->lastPage(),
                'from'          =>  $personas ->firstItem(),
                'to'            =>  $personas ->lastItem(),
            ],
            'personas'=>$personas
        ];

    }
    public function store(Request $request)
    {
        if (!$request->ajax()) return redirect('/');
        //
        
        $persona = new Persona();
        $persona -> nombre = $request->nombre;
        $persona -> apellido = $request->apellido;
        $persona -> tel = $request->tel;
        $persona -> direccion  = $request->direccion;
        $persona -> email = $request->email;
        $persona -> condicion = '1';
        $persona -> save();
    }

    public function update(Request $request)
    {
        if (!$request->ajax()) return redirect('/');
        //
        $persona =  Persona::findOrFail($request->id);
        $persona -> nombre = $request->nombre;
        $persona -> apellido = $request->apellido;
        $persona -> tel = $request->tel;
        $persona -> direccion  = $request->direccion;
        $persona -> email = $request->email;
        $persona -> condicion = '1';
        $persona -> save();
    }

}
