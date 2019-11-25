@extends('private.templates.master')
@section('menu_lateral')
    @include('private.home.menu_lateral')
@stop
@section('titulo_pagina')
    Página Inicial
@stop
@section('conteudo')
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <!--Begin::Dashboard 1-->
    <!--Begin::Row-->

    <!--begin::Portlet-->
		<div class="kt-portlet">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">
                        Cadastro Auxiliar Tipo Manual
					</h3>
				</div>
			</div>
			<!--begin::Form-->
			<form class="kt-form" action="{{Route('salvar_cadastros')}}" method="POST">
                @if(Session('mensagem'))
                <div class="alert alert-success">
                    {{Session('mensagem')}}
                </div>
                @endif 
                <input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="kt-portlet__body">
					<div class="form-group form-group-last">
						<div class="alert alert-secondary" role="alert">
							<div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
						  	<div class="alert-text">
								The example form below demonstrates common HTML form elements that receive updated styles from Bootstrap with additional classes.
							</div>
						</div>
					</div>
                    <div class="form-group">
						<label>Id do Usuário</label>
						<input type="number" class="form-control" name="id_usuario" placeholder="Id do Usuario">
						
					</div>
					<div class="form-group">
						<label>Tipo do Manual</label>
						<input type="text" class="form-control" name="tipo_manual" placeholder="Nome do Tipo do Manual">
						
					</div>
				<div class="kt-portlet__foot">
					<div class="kt-form__actions">
						<button type="submit" class="btn btn-primary">Submit</button>
						<button type="submit" class="btn btn-secondary">Cancel</button>
					</div>
				</div>
			</form>
			<!--end::Form-->			
		</div>



    <!--
    <div class="row">

    <section class="form-section col-lg-12 ">
        <h1>Cadastro Auxiliar Tipo Manual</h1>
        
        <div class="form-wrapper">
            @if(Session('mensagem'))
            <div class="alert alert-success">
                {{Session('mensagem')}}
            </div>
            @endif 
            <form action="/CadastroAuxiliar/inserir" method="POST" >

            <input type="hidden" name="_token" value="{{csrf_token()}}">

                <div class="input-block">
                    <label for="tipo-manual">Id do Usuario:</label>
                    <input type="number" name="id_usuario" placeholder="Id do Usuario">
                </div>
                <div class="input-block">
                    <label for="tipo-manual">Tipo do Manual:</label>
                    <input type="text" name="tipo_manual" placeholder="Nome do Tipo do Manual">
                </div>
                <button type="submit" class="btn-login">Enviar</button>
            </form>
        </div>
    </section>
</div>
-->

@stop