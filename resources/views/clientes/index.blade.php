@extends('./layout.app')
@section('body')

    
    <div class="card-border">
        <div class="card-body">
            <h4 class="card-title"><center>LISTAGEM DE CLIENTE</center></h4>
            <table class="table table-ordered table-hover">
                <thead class="thead thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>NOME</th>
                        <th>CPF</th>
                        <th>ENDEREÇO</th>
                        <th>DATA DE NASCIMENTO</th>
                        <th>AÇÕES</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($clientes as $cliente)
                    <tr>
                        <th>{{$cliente->id}}</th>
                        <th>{{$cliente->nome}}</th>
                        <th>{{$cliente->cpf}}</th>
                        <th>{{$cliente->endereco}}</th>
                        <th>{{$cliente->datanasc}}</th>
                        
                        <th>
                                <form action="{{route('clientes.destroy', $cliente->id)}}" method="POST">
                                    <a class="btn btn-success" href="{{ route('clientes.edit', $cliente->id) }}">Editar</a>
                                    @csrf
                                    @method("DELETE")
                                    <button class="btn btn-danger" type="submit">Remover</button>
                                </form>
                        </th>
                        
                    </tr>
                    
                @endforeach
                <a href="{{route('clientes.create')}}" class="btn btn-primary btn-lg btn-block">NOVO CLIENTE</a>
                </tbody>
                
            </table>
            <a href="{{route('menucliente')}}" class="btn btn-warning btn-lg btn-block">VOLTAR AO MENU CLIENTE</a>
        </div>
    </div>


@endsection