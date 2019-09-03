@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Informe abaixo as informações do cliente
                        <a class="float-right" href="{{url('/clientes')}}">Retornar a página anterior</a>
                    </div>

                    <div class="card-body">
                        @if (session('mensagem_sucesso'))
                            <div class="alert alert-success" role="alert">
                                {{ session('mensagem_sucesso') }}
                            </div>
                        @endif

                        @if(Request::is('*/editar'))
                            {!! Form::model($cliente,['method' => 'PATCH', 'url' => 'clientes/'.$cliente->id]) !!}
                        @else
                            {!! Form::open(['url' => 'clientes/cadastrar']) !!}
                        @endif

                            {!! Form::label('nome', 'Nome*') !!}
                            {!! Form::input('text', 'nome', NULL, ['class' => 'form-control', 'autofocus', 'required', 'placeholder' => 'Digite aqui seu nome']) !!}
                            <br>

                            {!! Form::label('sobrenome', 'Sobrenome*') !!}
                            {!! Form::input('text', 'sobrenome', NULL, ['class' => 'form-control', 'required', 'placeholder' => 'Digite aqui seu sobrenome']) !!}
                            <br>

                            {!! Form::label('nascimento', 'Data de nascimento*') !!}
                            {!! Form::input('date', 'nascimento', NULL, ['class' => 'form-control', 'required']) !!}
                            <br>

                            {!! Form::label('telefone', 'Número para contato*') !!}
                            {!! Form::input('string', 'telefone', NULL, ['class' => 'form-control', 'required']) !!}
                            <br>

                            @if(Request::is('*/editar'))
                                {!! Form::submit('Salvar', ['class' => 'btn btn-primary', 'align' => 'center']) !!}
                            @else
                                {!! Form::submit('Cadastrar cliente', ['class' => 'btn btn-primary', 'align' => 'center']) !!}
                            @endif

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
