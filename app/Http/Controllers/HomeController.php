<?php

namespace RegistroAsistencia\Http\Controllers;

use Illuminate\Http\Request;

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
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        return view('home');
    }

    public function docente(){
        return view('vistas.rAsistenciaDocente');
    }
    public function estudiante(){
        return view('vistas.rAsistenciaEstudiante');
    }
    /*public function usuario(){
        return view('auth.register');
    }*/
    public function showRegApoderado(){
        return view('vistas.registrarApoderado');
    }
    
}
