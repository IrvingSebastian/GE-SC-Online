<?php

namespace App\Http\Controllers;

use App\Models\Stadistic;
use Illuminate\Http\Request;

/**
 * Class StadisticController
 * @package App\Http\Controllers
 */
class StadisticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stadistics = Stadistic::paginate();

        return view('stadistic.index', compact('stadistics'))
            ->with('i', (request()->input('page', 1) - 1) * $stadistics->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $stadistic = new Stadistic();
        return view('stadistic.create', compact('stadistic'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Stadistic::$rules);

        $stadistic = Stadistic::create($request->all());

        return redirect()->route('stadistics.index')
            ->with('success', 'Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $stadistic = Stadistic::find($id);

        return view('stadistic.show', compact('stadistic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stadistic = Stadistic::find($id);

        return view('stadistic.edit', compact('stadistic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Stadistic $stadistic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stadistic $stadistic)
    {
        request()->validate(Stadistic::$rules);

        $stadistic->update($request->all());

        return redirect()->route('stadistics.index')
            ->with('success', 'Registro actualizado satisfactoriamente.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $stadistic = Stadistic::find($id)->delete();

        return redirect()->route('stadistics.index')
            ->with('success', 'Registro borrado satisfactoriamente.');
    }
}
