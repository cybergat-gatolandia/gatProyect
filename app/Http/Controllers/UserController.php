<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Rol;


class UserController extends Controller
{
    
    public function index(Request $request)
    {
       // if (!$request->ajax()) return redirect('/');
        $buscar = $request->buscar;
        $criterio = $request->criterio;
        if ($buscar ==''){


            // EN ESTE LUGAR PAGINAMOS CUANTA INFORMACION QUEREMOS EN NUESTRA VISTA

            $users = User::join('rols','users.idrol','=','rols.id')
            ->join('personas','users.idpersona','personas.id') 
            ->select('users.id','users.idRol','rols.nombre','users.condicion') 
            ->orderBy('users.id', 'desc')->paginate(3);
        }
        else{
            $users = User::join('rols','users.idrol','=','rols.id')
            //->select('users.id','users.idRol','users.idPersona','users.password','users.condicion') 
            ->select('users.id','users.idRol','rols.nombre','users.condicion') 
            ->where('users.'.$criterio, 'like', '%'.$buscar . '%')
            ->orderBy('users.id', 'desc')->paginate(3);

            
        }
        return [ 
            'pagination'=> [
                'total'         =>  $users ->total(),
                'current_page'  =>  $users ->currentPage(),
                'per_page'      =>  $users ->perPage(),
                'last_page'     =>  $users ->lastPage(),
                'from'          =>  $users ->firstItem(),
                'to'            =>  $users ->lastItem(),
            ],
            'users'=>$users
        ];

    }  
    
    public function store(Request $request)
    {
        if (!$request->ajax()) return redirect('/');
        //
        
        $user = new Users();
        $user -> idrol = $request->idrol;
        $user -> idpersona = $request->idpersona;
        $user -> password = $request->password;
        $user -> usuario = $request->usuario;
        $user -> save();
    }
    public function update(Request $request)
    {
        if (!$request->ajax()) return redirect('/');
        //
        $user =  User::findOrFail($request->id);
        $user -> idrol = $request->idrol;
        $user -> idpersona = $request->idpersona;
        $user -> password = $request->password;
        $user -> usuario = $request->usuario;
        $user -> condicion = $request->condicion;
        $user -> save();
    }


    public function desactivar(Request $request)
    {
        if (!$request->ajax()) return redirect('/');
        //
        $user =  User::findOrFail($request->id);
        $user -> estado = '0';
        $user -> save();
    }

    public function activar(Request $request)
    {
        if (!$request->ajax()) return redirect('/');
        //
        $user =  User::findOrFail($request->id);
        $user -> estado = '1';
        $user -> save();
    }


}

    