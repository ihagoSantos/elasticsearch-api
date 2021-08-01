@extends('layouts.app')

@section('content')
    
    <div class="d-flex align-items-center flex-column div-buttons justify-content-center">
        <form action="" method="post">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-center">
                            <h1 class="title">Importar Arquivos</h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <label for="nome-index">Nome do Index</label>
                            <input type="text" class="form-control" id="nome-index" name="nome-index">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="arquivo" class="form-label">Selecione um arquivo json</label>
                            <input type="file" class="form-control" id="arquivo" name="arquivo">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-button">
                            <button type="submit" class="btn btn-primary">Enviar Arquivo</button>
                            <a href="/" class="btn btn-secondary">Voltar</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection