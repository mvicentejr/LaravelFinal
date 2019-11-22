<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = new Cliente();
        $cliente->nome = $request->input('nome');
        $cliente->cpf = $request->input('cpf');
        $cliente->endereco = $request->input('endereco');
        $cliente->datanasc = $request->input('data');
        $cliente->save();

        return view('clientes.confirma');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clientes = Cliente::find($id);
        if(isset($clientes)){
        return view('clientes.edit', compact('clientes'));
        }
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
        $clientes = Cliente::find($id);
        if(isset($clientes)){
            $clientes->nome = $request->input('nome');
            $clientes->cpf = $request->input('cpf');
            $clientes->endereco = $request->input('endereco');
            $clientes->datanasc = $request->input('data');
            $clientes->save();
        }
        return redirect()->route('clientes.index')->with('success', 'Produto excluido com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $clientes = Cliente::find($id);
        if(isset($clientes)){
            $clientes->delete();
        }
        return redirect()->route('clientes.index')->with('success', 'Produto excluido com sucesso!');
        // $produto->delete();
        // return redirect()->route('produtos.index')->with('success', 'Produto removido com sucesso.');
    }
}
