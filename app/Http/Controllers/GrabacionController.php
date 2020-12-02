<?php

namespace App\Http\Controllers;

use App\Models\Grabacion;
use App\Models\Tema;
use Illuminate\Http\Request;

class GrabacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grabaciones = Grabacion::with('temas')->get();

        return view('grabaciones.grabacionIndex', compact('grabaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $temas = Tema::pluck('tema', 'id')->toArray();
        return view('grabaciones.grabacionForm', compact('temas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'fecha' => ['required', 'date'],
            'tema' => 'required|min:5|max:255',
            'enlace' => 'required|url',
        ]);

        $grabacion = Grabacion::create($request->all());

        $grabacion->temas()->attach($request->tema_id);

        return redirect()->route('grabacion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Grabacion  $grabacion
     * @return \Illuminate\Http\Response
     */
    public function show(Grabacion $grabacion)
    {
        return view('grabaciones.grabacionShow', compact('grabacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Grabacion  $grabacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Grabacion $grabacion)
    {
        $temas = Tema::pluck('tema', 'id')->toArray();
        return view('grabaciones.grabacionForm', compact('grabacion', 'temas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Grabacion  $grabacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grabacion $grabacion)
    {
        $request->validate([
            'fecha' => ['required', 'date'],
            'tema' => 'required|min:5|max:255',
            'enlace' => 'required|url',
        ]);

        Grabacion::where('id', $grabacion->id)
            ->update($request->except('_method', '_token', 'tema_id'));

        $grabacion->temas()->sync($request->tema_id);

        return redirect()->route('grabacion.show', [$grabacion]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Grabacion  $grabacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grabacion $grabacion)
    {
        $grabacion->delete();
        return redirect()->route('grabacion.index');
    }

    public function calificar(Request $request, Grabacion $grabacion)
    {
        $grabacion->users()->attach(\Auth::id(), ['calificacion' => $request->calificacion]);
        return redirect()->route('grabacion.show', $grabacion->id);
    }
}
