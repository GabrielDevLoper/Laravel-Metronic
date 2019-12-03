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
        <div class="col-lg-12">
            <table class="table table-striped table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Id do Usuário</th>
                        <th>Tipo do Manual</th>
                        <th>Descrição </th>
                        <th>Dt. Criação</th>
                        <th>Dt. Alteração</th>
                        <th>Exclusão</th>
                        <th>Alteração</th>
                    </tr>               
                </thead>
                <tbody>
                    @foreach($cadastro_manual as $u)
                    <tr>
                        <td>{{$u->id_usuario}}</td>
                        <td>{{$u->tipo_manual}}</td>
                        <td>{{$u->descricao}}</td>
                        <td>{{$u->created_at}}</td>
                        <td>{{$u->updated_at}}</td>
                        <td>
                            <form action="{{route('apagar_cadastroManual',$u->id)}}" method="POST">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                @method('DELETE')                                
                                <button type="submit" class="btn btn-sm btn-danger">Excluir</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{route('tela_alteraManual')}}">
                                <button type="submit" class="btn btn-sm btn-primary">Alterar</button>
                            </form>
                        
                        </td>
                    </tr>
                    @endforeach
                
                </tbody>
           
            </table>
            
        </div>

    </div>
    

  

@stop