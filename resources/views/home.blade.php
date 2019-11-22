@extends('layouts.app')

@section('content')
<div class="container">
    <h1><center>Loja Música Som</center></h1>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</h1></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3><center>Aplicação em Teste!!!</center></h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
