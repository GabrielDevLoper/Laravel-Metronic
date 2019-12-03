<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CadastroManual;
use App\cadastroAuxiliar;
use App\Http\Requests\CadastroManual\NovoRequest;

class cadastroManualController extends Controller
{
    public function getCadastroManual(){
        $data['cadastro_auxiliar_tipo_manual'] = cadastroAuxiliar::all();
        return view('private.cadastro_manual.cadastro_manual', $data);
    }
    public function getListarCadastroManual(){
        $data['cadastro_manual'] = CadastroManual::all();
        return view('private.cadastro_manual.listar_cadastroManual', $data);
    }

    public function getAlterarCadastroManual(){
        $data0['cadastro_auxiliar_tipo_manual'] = cadastroAuxiliar::all();
        $data1['cadastro_manual'] = CadastroManual::all();
        return view('private.cadastro_manual.altera_cadastroManual', $data0, $data1);
    }

    public function store(NovoRequest $request){
        //dd($request->all());
        try{
            $ext = $request->file('arquivo_pdf')->getClientOriginalExtension();
            $name = $request->file('arquivo_pdf')->getClientOriginalName();
       
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
        $cadastroMan = cadastroManual::findOrFail($id);
        $cadastroMan->delete();

        $msg = "Cadastro Manual Excluído com Sucesso";
        return redirect()->back()->with('exclusao', $msg);
    }

}
