@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto mt-5">
                <div class="card p-0">
                    <div class="card-header text-center px-0">
                        <h2><b>Editar Cliente</b></h2>
                    </div>
                    <div class="card-body p-0">
                        <div class="form-group bg-secondary p-4 text-white mb-0">
                            <form action="{{route('clientes.update',$clientes->id)}}" method="POST">
                                @csrf
                                @method("PATCH")
                                <div class="form-group">
                                    <label name="nomeCliente">Nome</label>
                                    <input type="text" name="nome" id="nome" class="form-control" value="{{$clientes->nome}}">
                                </div>

                                <div class="form-group">
                                    <label name="cpfCliente">CPF</label>
                                    <input type="text" name="cpf" id="cpf" class="form-control" value="{{$clientes->cpf}}">
                                </div>

                                <div class="form-group">
                                    <label name="enderecoCliente">Endereço</label>
                                    <input type="text" name="endereco" id="endereco" class="form-control" value="{{$clientes->endereco}}">
                                </div>

                                <div class="form-group">
                                    <label name="datanascCliente">Data de Nascimento</label>
                                    <input type="date" name="data" id="data" class="form-control" value="{{$clientes->datanasc}}">
                                </div>

                                <div class="form-group">
                                    <input type="submit" class="btn btn-danger btn-lg btn-block" id="btnSalvar" name="btnSalvar" value="Salvar">
                                    <input type="button" class="btn btn-primary btn-lg btn-block" id="btVol" name="btVol" value="Voltar" onclick="javascript:location.href='{{route('menucliente')}}'">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
