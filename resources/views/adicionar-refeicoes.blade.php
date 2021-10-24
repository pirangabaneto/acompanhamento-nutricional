@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Nova Refeição</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('refeicao.criar') }}">
                        @csrf

                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                        <div class="form-group row">
                            <label for="nome" class="col-md-4 col-form-label text-md-right">Nome</label>

                            <div class="col-md-6">
                                <input id="nome" type="text" class="form-control"  name="titulo" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ingredientes" class="col-md-4 col-form-label text-md-right">Ingredientes</label>

                            <div class="col-md-6">
                                <input id="ingredientes" type="text" class="form-control" name="ingredientes" required >

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="data" class="col-md-4 col-form-label text-md-right date">data</label>

                            <div class="col-md-6" >
                                <div class="input-group date">
                                    <input type="text" class="form-control" id="datepicker" placeholder="MM/DD/AAAA" data-date-format="dd/mm/yyyy" name="data-hora" required>
                                </div>
                            </div>
                            <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
                        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>


                        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.standalone.min.css" rel="stylesheet" />
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/locales/bootstrap-datepicker.pt-BR.min.js"></script>
                        <script>
                            //formatando data
                            $('#datepicker').datepicker({
                            format: "dd/mm/yyyy",
                            language: "pt-BR",
                            orientation: 'auto',
                            });

                            //setando tempo de mensagem de sucesso
                            $('.alert-success').delay(3000).slideUp(300);
                        </script>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">Enviar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
