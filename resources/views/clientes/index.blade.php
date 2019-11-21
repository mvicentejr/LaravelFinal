    @extends('./layout.app')
    @section('body')
    <div class="jumbotron bg-secondary border boder-light">
        <div class="row">
            <div class="col-md-12 mx-auto mt-5">
                
                    <div class="card-deck">

                                    <div class="card border border-dark">
                                        <div class="card-body p-1">
                                        <div class="card-header text-center px-0">
                                            <h2><b>CADASTRAR NOVO CLIENTE</b></h2>
                                        </div>
                                        <p class="card-text">
                                        <center>
                                            <h5>CADASTRE AGORA SEU NOVO CLIENTE</h5>
                                        </center>
                                        </P>
                                        <a href="{{route('clientes.create')}}" class="btn btn-primary btn-lg btn-block">NOVO CLIENTE</a>
                                        </div>
                                    </div>


                                    <div class="card border border-dark">
                                        <div class="card-body p-1">
                                        <div class="card-header text-center px-0">
                                            <h2><b>MANUTENÇÃO DE CLIENTES</b></h2>
                                        </div>
                                        <p class="card-text">
                                        <center>
                                            <h5>ALTERAR INFORMAÇÕES OU REMOVER CLIENTES</h5>
                                        </center>
                                        </P>
                                        <a href="/clientes" class="btn btn-primary btn-lg btn-block">MANUTENÇÃO</a>
                                        </div>
                                    </div>
                        
                    </div>
                
            </div>
        </div>
    </div>
@endsection