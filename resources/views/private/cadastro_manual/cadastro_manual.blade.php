@extends('private.templates.master')
@section('menu_lateral')
    @include('private.home.menu_lateral')
@stop
@section('titulo_pagina')
    Página Inicial
@stop
@section('conteudo')
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <form action="{{Route('salvar_cadastroManual')}}" class="kt-form kt-form--label-right" method="POST" enctype="multipart/form-data">
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
                            <select class="itemName form-control" style="width:500px;" name="tipo_manual" required>
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
							<span class="form-text text-muted">Max file size is 1MB and max number of files is 5.</span>
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
			</form>
			<!--end::Form-->           
    </div>

@stop