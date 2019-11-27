<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cadastroManual;
use App\cadastroAuxiliar;

class cadastroManualController extends Controller
{
    public function getCadastroManual(){
        $data['cadastro_auxiliar_tipo_manual'] = cadastroAuxiliar::all();
        return view('private.cadastro_manual.cadastro_manual', $data);
    }

    public function store(Request $request){
        $ext = $request->file('arquivo_pdf')->getClientOriginalExtension();
        //cadastroManual::create($request->all());
        $cadastroMan = new cadastroManual();
        $cadastroMan->descricao = $request->descricao;
        $cadastroMan->id_usuario = $request->id_usuario;
        $cadastroMan->tipo_manual = $request->tipo_manual;
        //$cadastroMan->arquivo_pdf = $request->arquivo_pdf;

        $name = $cadastroMan->descricao;
        $nameFile = "{$name}.{$ext}";
        $cadastroMan->arquivo_pdf = $request->file('arquivo_pdf')->storeAs('uploads',$nameFile);
        $cadastroMan->save();
        

        $msg = "Cadastro Auxiliar Inserido com Sucesso";
        return redirect()->back()->with('mensagem', $msg);
    }

    public function destroy($id){
        $cadastroMan = cadastroManual::findOrFail($id);
        $cadastroMan->delete();

        $msg = "Cadastro Manual Excluído com Sucesso";
        return redirect()->back()->with('exclusao', $msg);
    }

}
