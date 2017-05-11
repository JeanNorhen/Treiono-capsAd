@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <a href="{{ URL::to('/') }}" class="btn btn-default pull-right">Listar prontuarios</a>
                <div class="panel-heading">Editar Prontuario</div>
                <div class="panel-body">
    <table class="table">
               <th>Numero do prontuario</th>
                <th>Nome do Paciente</th>
                <tbody>
                    @foreach($prontuarios as $prontuario)
                    <tr>
                        <td>{{$prontuario->id}}</td>
                        <td>{{$prontuario->NomeDoPaciente}}</td>
                        <td >
                            <a href="/prontuarios/{{$prontuario}}" class="btn btn-default">Editar</a>
                            <button class="btn btn-default">Excluir</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
                    {!! Form::open(['url'=>'prontuarios/salvar'])  !!}
                    {!! Form::label('nome','Nome do paciente')  !!}
                    {!! Form::input('text','NomeDoPaciente','',['class'=>'form-control','','placeholder'=>'nome do paciente aqui','autofocus'=>'autofocus'])  !!}
                    {!! Form::submit('Salvar',['class'=>'btn btn-primary']) !!}
                    {!! Form::close()  !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
