<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

/**
 * Class WorkController
 * @package App\Http\Controllers
 */
class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $works = Work::paginate();

        return view('work.index', compact('works'))
            ->with('i', (request()->input('page', 1) - 1) * $works->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $work = new Work();
        return view('work.create', compact('work'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $work = new Work();

        request()->validate(Work::$rules);

        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $extension = 'webp';
            $name = time().'.'.$extension;
            $destiny = '/images/trabajos/';
            $image = Image::make($file);

            $image->save(public_path().$destiny.$name, 100, $extension);

            $work->photo = $destiny.$name;
        }

        $work->name = $request->name;
        $work->year = $request->year;

        $work->save();

        return redirect()->route('works.index')
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
        $work = Work::find($id);

        return view('work.show', compact('work'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $work = Work::find($id);

        return view('work.edit', compact('work'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Work $work
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Work $work)
    {
        request()->validate(Work::$rules);

        if($request->hasFile('photo')){
            File::delete(public_path().$work->photo);

            $file = $request->file('photo');
            $extension = 'webp';
            $name = time().'.'.$extension;
            $destiny = '/images/trabajos/';
            $image = Image::make($file);

            $image->save(public_path().$destiny.$name, 100, $extension);

            $work->photo = $destiny.$name;
        }

        $work->name = $request->name;
        $work->year = $request->year;

        $work->update();

        return redirect()->route('works.index')
            ->with('success', 'Registro actualizado satisfactoriamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $work = Work::find($id);

        File::delete(public_path().$work->photo);

        $work->delete();

        return redirect()->route('works.index')
            ->with('success', 'Registro borrado satisfactoriamente');
    }
}
