<?php

namespace App\Http\Controllers;

use App\Album;
use App\Cantor;
use Illuminate\Http\Request;

class ALbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Obtem todos os alunos cadastrados e os passa para view
        $albuns = Album::all();
        
        return view('album.index')->with('albuns',$albuns);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cantores = Cantor::all();
        
        return view ('album.create')-> with('cantores',$cantores);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Album::create($request->all());
        return redirect('album');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function show(Album $album)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function edit(Album $album)
    {
        $cantores = Cantor::all();

        return view('album.edit')->with('album',$album) -> with('cantores',$cantores);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Album $album)
    {
        $album->update($request->all());
        return redirect('album'); 
    }


}
