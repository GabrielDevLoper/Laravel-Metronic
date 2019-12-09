<?php

namespace App\Http\Controllers;

use App\Models\CadastroAuxiliarTipoManual;
use Illuminate\Http\Request;
use App\Models\CadastroManual;
use App\Http\Requests\CadastroManual\NovoRequest;

class CadastroManualController extends Controller
{
    public function getCadastroManual(){
        $tipo_manual = CadastroAuxiliarTipoManual::pluck('tipo_manual', 'id');
        return view('private.cadastro_manual.cadastro_manual', compact('tipo_manual'));
    }
    public function getListarCadastroManual(){
        $listarCadastroManuais = CadastroManual::with('tipoManual')->paginate(10);
        return view('private.cadastro_manual.listar_cadastroManual', compact('listarCadastroManuais'));
    }

    public function getAlterarCadastroManual($id){
        $tipo_manual = CadastroAuxiliarTipoManual::pluck('tipo_manual', 'id');
        $telaEdit = CadastroAuxiliarTipoManual::findOrFail($id);
        return view('private.cadastro_manual.altera_cadastroManual', compact('tipo_manual'));


    }

    public function update(Request $request, $id){
        $cadastroMan = CadastroManual::findOrFail($id);
        $cadastroMan->descricao = $request->descricao;
        $cadastroMan->tipo_manual = $request->tipo_manual;
        $cadastroMan->save();

        return redirect()->back()->with('mensagem', "Cadastro Auxiliar Alterado com Sucesso");
    }

    public function store(Request $request){
        //dd($request->all());
        $ext = $request->file('arquivo_pdf')->getClientOriginalExtension();
        $name = $request->file('arquivo_pdf')->getClientOriginalName();
        try{
            CadastroManual::create([
                'descricao' => $request->descricao,
                'id_usuario' => $request->id_usuario,
                'tipo_manual' => $request->tipo_manual,
                'arquivo_pdf' => $request->file('arquivo_pdf')->storeAs('uploads',$name)
            ]);
        return redirect()->back()->with('mensagem', "Cadastro Manual Inserido com Sucesso");

        }catch(\Exception $e){
            return redirect()->back()->with('mensagemErro', "Erro ao realizar operação");
        }



    }

    public function destroy($id){
        $cadastroMan = CadastroManual::findOrFail($id);
        $cadastroMan->delete();

        $msg = "Cadastro Manual Excluído com Sucesso";
        return redirect()->back()->with('exclusao', $msg);
    }

}
