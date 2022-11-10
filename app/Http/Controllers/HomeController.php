<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Crear una nueva instancia de controlador.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Mostrar el panel de control de la aplicación.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('home');
    }

    //Función de la vista raiz
    public function raiz()
    {
        return redirect()->route('index');
    }

    //Función de la vista index
    public function index()
    {
        $data = Data::paginate();
        return view('index', compact('data'));    
    }
}
