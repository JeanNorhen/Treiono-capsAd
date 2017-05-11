@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <a href="{{ URL::to('/') }}" class="btn btn-default pull-right">Listar prontuarios</a>
                <div class="panel-heading">Lista de pacientes</div>
                <div class="panel-body">
<table class="table">
               <th>Nº</th>
                <th>Nome do Paciente</th>
                <tbody>
                    @foreach($prontuarios as $prontuario)
                    <tr>
                        <td>{{$prontuario->id}}</td>
                        <td>{{$prontuario->NomeDoPaciente}}</td>
                        <td class="teste" >
                            <button class="btn btn-default centralizado">Excluir</button>
                            <a href="{{ URL::to('prontuarios/mostrar/'.$prontuario->id) }}" class="btn btn-default centralizado">Abrir Prontuario</a>
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
