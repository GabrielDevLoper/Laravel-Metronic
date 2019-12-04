@extends('private.templates.master')
@section('menu_lateral')
    @include('private.home.menu_lateral')
@stop
@section('titulo_pagina')
    Página Inicial
@stop
@section('conteudo')


    <div class="col-lg-12">
		<div class="kt-portlet kt-margin-top-20">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">
						Cadastro de Manual
					</h3>
				</div>
			</div>
    <form action="{{Route('salvar_cadastroManual')}}" class="kt-form kt-form--label-right" method="POST" enctype="multipart/form-data">
	{{Form::open(['route'=>'salvar_cadastroManual', 'method'=>'post', 'enctype'=>'multipart/form-data'])}}
				@if(Session('mensagem'))
                <div class="alert alert-success">
                    {{Session('mensagem')}}
                </div>
                @endif 
				@if(Session('mensagemErro'))
                <div class="alert alert-danger">
                    {{Session('mensagemErro')}}
                </div>
                @endif 
    <input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="kt-portlet__body">
					<div class="form-group row">
						<label class="col-lg-3 col-form-label">Descrição</label>
						<div class="col-lg-6">
							<input type="name" class="form-control" placeholder="Descrição" name="descricao">
							<span class="form-text text-muted">Insira a Descrição do Manual</span>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label">Id do Usuario:</label>
						<div class="col-lg-6">
							<input type="number" class="form-control" placeholder="Id do Usuário" name="id_usuario">
							<span class="form-text text-muted">Insira o ID do usuario que cadastrou este manual</span>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label">Escolha o Tipo do Manual:</label>
						<div class="col-lg-6">
                            <select class="itemName form-control" style="width:500px;" name="tipo_manual">
                                @foreach($cadastro_auxiliar_tipo_manual as $c)
                                    <option name="tipo_manual">{{$c->tipo_manual}}</option>
                                @endforeach
                            </select>
                            <span class="form-text text-muted">Escolha o Tipo do Manual</span>
						</div>
					</div>

					<div class="form-group form-group-last row">
						<label class="col-lg-3 col-form-label">Arquivo PDF:</label>
						<div class="col-lg-6">
							<div class="kt-uppy" id="kt_uppy_5">
								<div class="kt-uppy__wrapper">
                                    <div class="uppy-Root uppy-FileInput-container">
                                    <input class="uppy-FileInput-input kt-uppy__input-control" type="file" name="arquivo_pdf" id="kt_uppy_1_input_control">
                                    <label class="kt-uppy__input-label btn btn-label-brand btn-bold btn-font-sm" for="kt_uppy_1_input_control">Insira Arquivo</label>
                                </div>
                                
								<div class="kt-uppy__list"></div>
								<div class="kt-uppy__status"></div>
                                <div class="kt-uppy__informer kt-uppy__informer--min"></div>
							</div>
							<span class="form-text text-muted">Por favor insira somente arquivo <strong>PDF</strong></span>
						</div>
					</div>
				</div>
				<div class="kt-portlet__foot">
					<div class="kt-form__actions">
						<div class="row">
							<div class="col-lg-3"></div>
							<div class="col-lg-6">
								<button type="submit" class="btn btn-brand">Submit</button>
								<button type="reset" class="btn btn-secondary">Cancel</button>
							</div>
						</div>
					</div>
				</div>
				{{Form::close()}}
			</form>           
    	
	
		

		
@stop