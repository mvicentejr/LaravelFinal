@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto mt-5">
                <div class="card p-0">
                    <div class="card-header text-center px-0">
                        <h2><b>DESEJA LISTAR MAIS CLIENTES?</b></h2>
                    </div>
                    <div class="card-body p-0">
                        <div class="form-group bg-secondary p-4 text-white mb-0">

                            <a href="{{route('clientes.create')}}" class="btn btn-dark btn-lg btn-block">SIM</a>
                            <a href="{{route('clientes.index')}}" class="btn btn-dark btn-lg btn-block">NÃO</a>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
