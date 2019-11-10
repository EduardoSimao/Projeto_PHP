<?php

namespace App\Http\Controllers;

use App\Genero;
use Illuminate\Http\Request;

class GeneroController extends Controller
{

    public function index()
    {
        $generos = Genero::all();
        return view('genero.index')->with('generos',$generos);
    }

    public function create()
    {
         return view ('genero.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Genero::create($request->all());
        return redirect('genero');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function edit(Genero $genero)
    {
        return view('genero.edit')->with('genero',$genero);
    }

    public function show(Genero $genero)
    {
        //
    }
    public function update(Request $request, Genero $genero)
    {
        $genero->update($request->all());
        return redirect('genero'); 
    }

}
