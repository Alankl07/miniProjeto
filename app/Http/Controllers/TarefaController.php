<?php

namespace App\Http\Controllers;

use App\tarefa;
use App\tipo;
use Illuminate\Http\Request;

class TarefaController extends Controller
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
        $tarefa = tarefa::all();
        return view('listar_tarefas', compact('tarefa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos = Tipo::all();
        return view('tarefas', compact('tipos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ta = new Tarefa();
        $ta->titulo = $request->input('titulo');
        $ta->usuario = $request->input('usuario');
        $ta->privacidade = $request->input('privacidade');
        $ta->status = $request->input('status');
        $ta->descricao = $request->input('descricao');
        $ta->tipo_de_tarefas = $request->input('tipo');
        $ta->Data_da_conclusão = $request->input('datepicker');
        $ta->save();
        return redirect()->route('tarefas.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function show(tarefa $tarefa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function edit(tarefa $tarefa)
    {
        $tipos = Tipo::all();
        return view('tarefa_editar', compact('tarefa', 'tipos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tarefa $tarefa)
    {
        $tarefa->titulo = $request->input('titulo');
        $tarefa->usuario = $request->input('usuario');
        $tarefa->privacidade = $request->input('privacidade');
        $tarefa->status = $request->input('status');
        $tarefa->descricao = $request->input('descricao');
        $tarefa->tipo_de_tarefas = $request->input('tipo');
        $tarefa->data_da_conclusão = $request->input('datepicker');
        $tarefa->save();
        return redirect()->route('tarefas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function destroy(tarefa $tarefa)
    {
        $tarefa->delete();
        return redirect()->route('tarefas.index');
    }
}
