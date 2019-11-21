@extends('layout')
@section('content')
<br>
<h2><center>Lista de Vendas</center></h2>
<br>
<table class="table table-bordered">
    <tr>
        <th>ID Venda</th>
        <th>ID Cliente</th>
        <th>Nome Cliente</th>
        <th>Data Venda</th>
        <th></th>
    </tr>
    @foreach ($vendas as $venda)
        <tr>
            <td>{{$venda->id}}</td>
            <td>{{$venda->cliente->id}}</td>
            <td>{{$venda->cliente->nome}}</td>
            <td>{{$venda->datavenda}}</td>
            <td>
                <a class="btn btn-secondary" href="{{ route('vendas.show', $venda->id) }}">Detalhar</a>
            </td>
        </tr>
    @endforeach
</table>

@endsection
