@extends('layout')
@section('content')
<h2><center>Listar Produtos</center></h2>

<br>
<form action="/produtos/create">
    <div class="field">
        <div class="control">
            <button type="submit" class="button is-link">Adicionar Novo</button>
        </div>
    </div>
</form>
<br>

<table class="table table-hover">
    <tr>
        <th>ID</th>
        <th>Descrição</th>
        <th>Quantidade</th>
        <th>Valor</th>
        <th></th>
    </tr>
    @foreach ($produtos as $produto)
        <tr>
            <td>{{$produto->id}}</td>
            <td>{{$produto->descricao}}</td>
            <td>{{$produto->quantidade}}</td>
            <td>{{$produto->valor}}</td>
            <td>
                <form action="{{route('produtos.destroy', $produto->id)}}" method="POST">
                    <a class="btn btn-secondary" href="{{ route('produtos.show', $produto->id) }}">Mostrar</a>
                    <a class="btn btn-success" href="{{ route('produtos.edit', $produto->id) }}">Editar</a>
                    @csrf
                    @method("DELETE")
                    <button class="btn btn-danger" type="submit">Remover</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

<br>
<br>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{$message}}</p>
</div>
@endif

@endsection
