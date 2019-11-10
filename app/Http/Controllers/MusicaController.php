<?php

namespace App\Http\Controllers;

use App\Musica;
use App\Genero;
use App\Album;
use Illuminate\Http\Request;

class MusicaController extends Controller
{
    
    public function index()
    {
        // Obtem todos os alunos cadastrados e os passa para view
        $musicas = Musica::all();
        return view('musica.index')->with('musicas',$musicas);
    }

    public function create()
    {
        $albuns = Album::all();
        $generos = Genero::all();

        return view ('musica.create')-> with('albuns',$albuns)-> with('generos',$generos);
    }

    
    public function store(Request $request)
    {
        Musica::create($request->all());
        return redirect('musica');
    }

    
    public function edit(Musica $musica)
    {
        $albuns = Album::all();
        $generos = Genero::all();

        return view('musica.edit')->with('musica',$musica)-> with('albuns',$albuns)-> with('generos',$generos);
    }

    public function update(Request $request, Musica $musica)
    {
        $musica->update($request->all());
        return redirect('musica'); 
    }

    public function destroy(Musica $musica)
    {
        //
    }
}
