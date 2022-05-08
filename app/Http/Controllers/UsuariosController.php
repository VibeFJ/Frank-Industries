<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsuariosController extends Controller
{
    /**
     * Retortar vista de registro
     * @return view registro
     */
    public function create(){
      return view('auth.registro');
    }

    /**
     * Guarda el registro y ingresa a inicio
     * @return view inicio
     */
    public function guardar(Request $request){
        //Validar si un correo ya existe
        $user = User::where('email', $request->email)->first();
        if($user){
            return json_encode('existe');
        }
        $user = User::create(request(['name', 'last-name', 'email', 'password']));
        auth()->login($user);
        return json_encode('registrado');
    }

    /**
     * Retornar vista de login
     * @return view login
     */
    public function view(){
      return view('auth.login');
    }

    /**
     * Guarda el login y ingresa a inicio
     * @return view inicio
     */
    public function ingresar(){
        if(!auth()->attempt(request(['email', 'password']))){
          return json_encode('false');
        }
        return json_encode('true');
    }

    /**
     * Cierra la sesion
     * @return view login
     */
    public function destroy(){
        auth()->logout();
        return redirect()->to('login');
    }
}
