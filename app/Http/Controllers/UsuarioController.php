<?php

namespace App\Http\Controllers;

use App\usuario;
use App\tarefa;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::all();
        return view('lista_usuario', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadastro_usuario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = new Usuario();
        $usuario->Nome = $request->input('nome');
        $usuario->Sexo = $request->input('sexo');
        $usuario->Data_de_Nascimento = $request->input('datepicker');
        $usuario->Email = $request->input('email');
        $usuario->Telefone = $request->input('tel');
        $usuario->Login = $request->input('login');
        $usuario->Senha = $request->input('senha');
        $usuario->save();
        return redirect()->route('usuarios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(usuario $usuario)
    {
        return view ('usuario_editar', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, usuario $usuario)
    {
        $usuario->Nome = $request->input('nome');
        $usuario->Sexo = $request->input('sexo');
        $usuario->Data_de_Nascimento = $request->input('datepicker');
        $usuario->Email = $request->input('email');
        $usuario->Telefone = $request->input('tel');
        $usuario->Login = $request->input('login');
        $usuario->Senha = $request->input('senha');
        $usuario->save();
        return redirect()->route('usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(usuario $usuario)
    {
        $usuario->delete();
        return redirect()->route('usuarios.index');
    }
}
