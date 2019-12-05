@extends('private.templates.master')
@section('menu_lateral')
    @include('private.home.menu_lateral')
@stop
@section('titulo_pagina')
    Página Inicial
@stop
@section('conteudo')


<div class="row">
            @if(Session('exclusao'))
            <div class="alert alert-success">
                {{Session('exclusao')}}
            </div>
            @endif
            @if(Session('mensagemErro'))
            <div class="alert alert-danger">
                {{Session('mensagemErro')}}
            </div>
            @endif 
        <div class="col-lg-12">
            <table class="table table-striped table-bordered table-hover">
                <thead class="">
                    <tr>
                        <th>Id do Usuário</th>
                        <th>Tipo do Manual</th>
                        <th>Dt. Criação</th>
                        <th>Dt. Alteração</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </tr>               
                </thead>
                <tbody>
                    @foreach($cadastro_auxiliar_tipo_manual as $u)
                    <tr>
                        <td>{{$u->id_usuario}}</td>
                        <td>{{$u->tipo_manual}}</td>
                        <td>{{$u->created_at}}</td>
                        <td>{{$u->updated_at}}</td>
                        <td>
                            <a href="{{route('apagar_cadastros', $u->id)}}" class="btn btn-danger btn-outline">Excluir</a> 
                        </td>
                        <td>
                            <a href="{{route('apagar_cadastros', $u->id)}}" class="btn btn-primary btn-outline">Alterar</a>
                        </td>
                    </tr>
                    @endforeach
                
                </tbody>
           
            </table>
            
        </div>

    </div>
    
@stop
