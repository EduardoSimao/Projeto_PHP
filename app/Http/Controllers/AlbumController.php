<?php

namespace App\Http\Controllers;

use App\Album;
use App\Cantor;
use Illuminate\Http\Request;

class ALbumController extends Controller
{

    public function index()
    {
        // Obtem todos os alunos cadastrados e os passa para view
        $albuns = Album::all();
        
        return view('album.index')->with('albuns',$albuns);
    }

    public function create()
    {
        $cantores = Cantor::all();
        
        return view ('album.create')-> with('cantores',$cantores);
    }

    public function store(Request $request)
    {
        Album::create($request->all());
        return redirect('album');
    }

    public function show(Album $album)
    {
        //
    }

    
    public function edit(Album $album)
    {
        $cantores = Cantor::all();

        return view('album.edit')->with('album',$album) -> with('cantores',$cantores);
    }

    public function update(Request $request, Album $album)
    {
        $album->update($request->all());
        return redirect('album'); 
    }


}
