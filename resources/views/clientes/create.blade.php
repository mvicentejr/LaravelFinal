@extends('./layout.app')

@section('body')

<div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto mt-5">
                <div class="card p-0">
                    <div class="card-header text-center px-0">
                        <h2><b>NOVO CLIENTE</b></h2>
                    </div>
                    <div class="card-body p-0">
                        <div class="form-group bg-secondary p-4 text-white mb-0">
                            <form action="{{route('clientes.store')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label name="nomeCliente">Nome</label>
                                    <input type="text" name="nome" id="nome" class="form-control" placeholder="Inserir Nome Completo">
                                </div>

                                <div class="form-group">
                                    <label name="cpfCliente">CPF</label>
                                    <input type="text" name="cpf" id="cpf" class="form-control" placeholder="Inserir CPF">
                                </div>

                                <div class="form-group">
                                    <label name="enderecoCliente">Endereço</label>
                                    <input type="text" name="endereco" id="endereco" class="form-control" placeholder="Inserir Endereço">
                                </div>

                                <div class="form-group">
                                    <label name="datanascCliente">Data de Nascimento</label>
                                    <input type="date" name="data" id="data" class="form-control" placeholder="Inserir Data de Nascimento">
                                </div>

                                <div class="form-group">
                                    <input type="submit" class="btn btn-danger" id="btnSalvar" name="btnSalvar" value="Salvar">
                                    <input type="button" class="btn btn-primary" id="btVol" name="btVol" value="Voltar" onclick="javascript:location.href='{{route('clientes.index')}}'">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection