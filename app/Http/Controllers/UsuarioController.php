<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;

class usuarioController extends Controller
{
    
    public function index()
    {
        return view('usuario.index');
    }

    
    public function create()
    {
        $usuarios = Usuario::all();

        return view ('usuario.create')-> with('usuario',$usuarios);
    }

    public function store(Request $request)
    {
        Usuario::create($request->all());
        return redirect('usuario');
    }

    public function show(Request $request)
    {
        
    }
}
