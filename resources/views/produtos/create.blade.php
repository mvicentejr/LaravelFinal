@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-6 margin-tb">
            <div class="pull-right">
                <h2>Cadastrar Novo Produto</h2>
            </div>
        </div>
    </div>
    <br><br>
    <form action="/produtos" method="POST">
        @csrf
        <div class="field">
            <strong>Descrição: </strong>
            <div class="control">
                <input type="text" class="input" name="descricao">
            </div>
        </div>
        <div class="field">
            <strong>Quantidade: </strong>
            <div class="control">
                <input type="text" class="input" name="quantidade">
            </div>
        </div>
        <div class="field">
            <strong>Valor: </strong>
            <div class="control">
                <input type="text" class="input" name="valor">
            </div>
        </div>
        <br>
        <input type="submit" class="button is-success" value="Gravar">
        <input type="reset" class="button is-warning" value="Limpar">
        <a class="btn btn-primary" href="{{route('produtos.index')}}">Voltar</a>
    </form>

    <br><br>
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Opa!!!</strong>Existem erros na entrada de dados. <br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

@endsection
