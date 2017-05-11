@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <a href="{{ URL::to('/') }}" class="btn btn-default pull-right">Listar prontuarios</a>
                <div class="panel-heading">Editar Prontuario</div>
                <div class="panel-body">
                <div class="row ">
                    <div class="col-xs-6 col-sm-6 col-lg-6 col-lg-offset-2 cabacalhoProntuario">
                        <span class="cabacalhoProntuario">ESTADO DE MATO GROSSO</span>
                        <span class="cabacalhoProntuario">PREFEITURA MUNICIPAL DE RONDONÓPOLIS</span>
                        <span class="cabacalhoProntuario">CAPS/AD – CENTRO DE ATENÇÃO PSICOSSOCIAL</span>
                        <span class="cabacalhoProntuario">“AFRO CARLOS STEFANINI BAUTISTA’’</span>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-lg-4 cabacalhoProntuario">
                    {{Html::image('img/bandeiraRoo.png','bandeira Rondonópolis', array('class' => 'img-responsive centralizaImagem', 'style'=> 'max-width: 100px')) }}
                    </div>                    
                </div>
                <hr>
            <table class="table">
               <th>Data</th>
                <th>Ficha de Evolução Paciente</th>
                <tbody>                    
                    <tr>
                        <td>{{$prontuario->id}}</td>
                        <td>{{$prontuario->NomeDoPaciente}}</td>
                        <td>
                            <button class="btn btn-default centralizado">Excluir</button>
                            <a href="/prontuarios/{{$prontuario}}" class="btn btn-default centralizado">Editar</a>
                            
                            </td>
                        </tr>
                </tbody>
            </table>
            <hr>
            <div class="row">
                <div class="col-xs-6">
                    {!! Form::open(['url'=>'prontuarios/salvar'])  !!}
                    {!! Form::label('data','Data')  !!}
                    {!! Form::input('date','anotacaoDoProntuario','',['class'=>'form-control','','autofocus'=>'autofocus'])  !!}
                </div>
                <div class="col-xs-6">                
                    {!! Form::label('anotacao','Adicionar nova anotação')  !!}
                    {!! Form::input('textarea','anotacaoDoProntuario','',['class'=>'form-control','3 < 4','','placeholder'=>'preencha com anotações sobre o paciente'])  !!}
                    {!! Form::submit('Salvar',['class'=>'btn btn-primary btn-pull']) !!}
                    {!! Form::close()  !!}                    
                </div>
            </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
