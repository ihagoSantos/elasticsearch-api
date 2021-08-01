@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            <h1 class="title">Projeto Elasticsearch</h1>
        </div>
    </div>

    <div class="d-flex align-items-center flex-column div-buttons justify-content-center">
        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-primary btn-home" href="{{ url('file') }}">Importar Arquivos</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-primary btn-home" href="">Visualizar Dados</a>
            </div>
        </div>
    
    </div>
@endsection