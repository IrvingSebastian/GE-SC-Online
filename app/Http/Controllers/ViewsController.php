<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\Stadistic;
use App\Models\Info;
use Illuminate\Http\Request;

class ViewsController extends Controller
{
    //Función de la vista raiz
    public function raiz()
    {
        return redirect()->route('index');
    }

    //Función de la vista index
    public function index()
    {
        $data = Data::paginate();
        $stadistic = Stadistic::paginate();
        $info = Info::paginate();
        return view('index', compact('data', 'stadistic', 'info'));    
    }
}
