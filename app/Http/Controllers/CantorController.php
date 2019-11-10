<?php

namespace App\Http\Controllers;

use App\Cantor;
use Illuminate\Http\Request;

class CantorController extends Controller
{

    public function index()
    {
        $cantores = Cantor::all();
        return view('cantor.index')->with('cantores',$cantores);
    }

    public function create()
    {
         return view ('cantor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Cantor::create($request->all());
        return redirect('cantor');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function edit(cantor $cantor)
    {
        return view('cantor.edit')->with('cantor',$cantor);
    }

    public function show(Cantor $cantor)
    {
        //
    }
    public function update(Request $request, Cantor $cantor)
    {
        $cantor->update($request->all());
        return redirect('cantor'); 
    }

}
