@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-6 margin-tb">
            <div class="pull-right">
                <h2><center>Mostrar Venda</center></h2>
            </div>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-lg-6 margin-tb">
        <div class="field">
            <strong>ID Venda: </strong> {{$venda->id}}
        </div>
        <br>
        <div class="field">
            <strong>ID Cliente: </strong> {{$venda->cliente->id}}
        </div>
        <br>
        <div class="field">
            <strong>Nome Cliente: </strong> {{$venda->cliente->nome}}
        </div>
        <br>
        <div class="field">
            <strong>Data Venda: </strong> {{$venda->datavenda}}
        </div>
        <br>
        <table class="table table-bordered">
            <tr>
                <th>ID Item Venda</th>
                <th>Produto</th>
                <th>Quantidade</th>
                <th>Total</th>
            </tr>
            @foreach ($venda->itens as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->produto->descricao}}</td>
                <td>{{$item->quantidade}}</td>
                <td>{{$item->total}}</td>
            </tr>
            @endforeach
        </table>
        <br>
        <a class="btn btn-primary" href="{{route('vendas.index')}}">Voltar</a>
    </div>
    </div>

@endsection
