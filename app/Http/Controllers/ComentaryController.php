<?php

namespace App\Http\Controllers;

use App\Models\Comentary;
use Illuminate\Http\Request;

/**
 * Class ComentaryController
 * @package App\Http\Controllers
 */
class ComentaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comentaries = Comentary::paginate();

        return view('comentary.index', compact('comentaries'))
            ->with('i', (request()->input('page', 1) - 1) * $comentaries->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comentary = new Comentary();
        return view('comentary.create', compact('comentary'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Comentary::$rules);

        $comentary = Comentary::create($request->all());

        return redirect()->route('comentaries.index')
            ->with('success', 'Registro creado satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comentary = Comentary::find($id);

        return view('comentary.show', compact('comentary'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comentary = Comentary::find($id);

        return view('comentary.edit', compact('comentary'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Comentary $comentary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comentary $comentary)
    {
        request()->validate(Comentary::$rules);

        $comentary->update($request->all());

        return redirect()->route('comentaries.index')
            ->with('success', 'Registro actualizado satisfactoriamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $comentary = Comentary::find($id)->delete();

        return redirect()->route('comentaries.index')
            ->with('success', 'Registro borrado satisfactoriamente');
    }
}
