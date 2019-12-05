<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CadastroManual;
use App\cadastroAuxiliar;
use App\Http\Requests\CadastroManual\NovoRequest;

class cadastroManualController extends Controller
{
    public function getCadastroManual(){
        //$data['cadastro_auxiliar_tipo_manual'] = cadastroAuxiliar::all();
        //return view('private.cadastro_manual.cadastro_manual', $data);
        $tipo_manual = cadastroAuxiliar::pluck('tipo_manual', 'id');
        return view('private.cadastro_manual.cadastro_manual', compact('tipo_manual'));
    }
    public function getListarCadastroManual(){
        $listaCadastrosManuais = CadastroManual::with('tipoManual')->paginate(10);
        return view('private.cadastro_manual.listar_cadastroManual',compact('listaCadastrosManuais') );
    }

    public function getAlterarCadastroManual(){
        $data0['cadastro_auxiliar_tipo_manual'] = cadastroAuxiliar::all();
        //$data1['cadastro_manual'] = CadastroManual::all();
       
    }

    public function store(Request $request){
        //dd($request->all());
        $ext = $request->file('arquivo_pdf')->getClientOriginalExtension();
        $name = $request->file('arquivo_pdf')->getClientOriginalName();
        if($ext == "pdf"){
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
        }else{
            return redirect()->back()->with('mensagemErro', "Por favor insira arquivos somente PDF"); 
        }
        
        
        
    }

    public function destroy($id){
        $cadastroMan = cadastroManual::findOrFail($id);
        $cadastroMan->delete();

        return redirect()->back()->with('exclusao', "Cadastro Manual Excluído com Sucesso");
    }

}
