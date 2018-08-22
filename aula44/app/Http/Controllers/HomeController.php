<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('manutencao');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }


    public function dashboard(){
        return view('dashboard');
    }


    public function formUsuario(){

        if (!$this->middleware('guest')) {
            return view('usuarios');
        }
        else{
            return view('usuarios');
        }
    }

    public function alterUsuario(Request $request){
        //if (!$this->middleware('guest')) {
        if(Auth::check()){
            $id = Auth::id();
            $usuario = User::find($id);

            // dd($usuario);
            // exit;

            $usuario->name = $request->input('name');
            $usuario->email = $request->input('email');
            $usuario->phone = $request->input('phone');
            $usuario->password = Hash::make($request->input('password'));

            // dd($usuario);
            // exit;

            $sucesso = $usuario->save();
            if($sucesso){
                Auth::logout();
                return view('Auth.login');                
            }
            else{
                return view('usuarios');
            }



        }
    }

}
