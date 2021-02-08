<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AgendaContatos;
use App\Models\Agenda;

class AgendaContatos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->session()->has('agenda')){ 
            $detalhes = $request->session()->get('agenda');        
        }
    
        return view('agenda-index',['agenda' => $detalhes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('agenda-create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $_POST['id'];
        $Informacoes = ['id'             => $id,     
                   'nome'           => $_POST['nome'],
                   'celular'        => $_POST['celular'],
                   'telefone'       => $_POST['telefone'],
                   'dtnasc' => $_POST['dtnasc']];

        if($request->session()->has('agenda')){ 
            $detalhes = $request->session()->get('agenda');
            $detalhes[$id] = $Informacoes;
            session()->forget('agenda');
            $request->session()->put('agenda', $detalhes);
        }
        else {
            $request->session()->put('agenda', [$id => $Informacoes]);
        }
        return $this->show($request, $id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $detalhes = $request->session()->get('agenda');
        $informacoes = $detalhes[$id];
        return view("agenda-show",['agenda' => $informacoes]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {   
            $detalhes = $request->session()->get('agenda');
            $informacoes = $detalhes[$id];
           return view('agenda-edit',['agenda' => $informacoes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Informacoes = ['id'             => $id,     
                   'nome'           => $_POST['nome'],
                   'celular'        => $_POST['celular'],
                   'telefone'       => $_POST['telefone'],
                   'dtnasc' => $_POST['dtnasc']];

            $detalhes = $request->session()->get('agenda');
            $detalhes[$id] = $Informacoes;
            session()->forget('agenda');
            $request->session()->put('agenda', $detalhes);
        
        return $this->show($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $agenda = session()->get('agenda');
        unset($agenda[$id]);
        session()->forget('agenda');
        session()->put('agenda', $agenda);
        header("Location: agenda");

    }


}
