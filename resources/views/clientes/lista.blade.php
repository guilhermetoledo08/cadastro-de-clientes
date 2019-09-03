@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Clientes
                        <a class="float-right" href="{{url('/clientes/novo')}}">Novo cliente</a>
                    </div>

                    <div class="card-body">
                        @if (session('mensagem_sucesso'))
                            <div class="alert alert-success" role="alert">
                                {{ session('mensagem_sucesso') }}
                            </div>
                        @endif
                        <table class="table">
                            <th>Nome</th>
                            <th>Sobrenome</th>
                            <th>Data de nascimento</th>
                            <th>Contato</th>
                            <th>Opções</th>
                            <tbody>
                                @foreach($clientes as $cliente)
                                <tr>
                                    <td>{{ $cliente->nome }}</td>
                                    <td>{{ $cliente->sobrenome }}</td>
                                    <td>{{ date('d/m/Y',strtotime($cliente->nascimento))}}</td>
                                    <td>{{ $cliente->telefone }}</td>
                                    <td>
                                        <a href="clientes/{{ $cliente->id }}/editar" class="btn btn-outline-dark btn-sm">Editar</a>
                                        {!! Form::open(['method' => 'DELETE', 'url' => '/clientes/'.$cliente->id, 'style' => 'display: inline']) !!}
                                        <button type="submit" class="btn btn-outline-danger btn-sm" >Excluir</button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
