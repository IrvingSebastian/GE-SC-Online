<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\Stadistic;
use App\Models\Info;
use App\Models\Work;
use Illuminate\Http\Request;
use Psy\Command\WhereamiCommand;

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
        $work = Work::paginate();

        return view('index', compact('data', 'stadistic', 'info', 'work'));    
    }
}
