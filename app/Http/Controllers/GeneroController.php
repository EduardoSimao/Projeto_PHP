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

    public function store(Request $request)
    {
        Genero::create($request->all());
        return redirect('genero');
    }
    
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
