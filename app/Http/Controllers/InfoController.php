<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;

/**
 * Class InfoController
 * @package App\Http\Controllers
 */
class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infos = Info::paginate();

        return view('info.index', compact('infos'))
            ->with('i', (request()->input('page', 1) - 1) * $infos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $info = new Info();
        return view('info.create', compact('info'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Info::$rules);

        $info = Info::create($request->all());

        return redirect()->route('infos.index')
            ->with('success', 'Info created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $info = Info::find($id);

        return view('info.show', compact('info'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $info = Info::find($id);

        return view('info.edit', compact('info'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Info $info
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Info $info)
    {
        request()->validate(Info::$rules);

        $info->update($request->all());

        return redirect()->route('infos.index')
            ->with('success', 'Info updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $info = Info::find($id)->delete();

        return redirect()->route('infos.index')
            ->with('success', 'Info deleted successfully');
    }
}
