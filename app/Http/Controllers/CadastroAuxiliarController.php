<?php

namespace App\Http\Controllers;

use App\Models\CadastroAuxiliarTipoManual;
use Illuminate\Http\Request;
use App\Models\CadastroManual;
use App\Http\Requests\ValidaRequest;

class CadastroAuxiliarController extends Controller
{

    public function getCadastroAux(){
        //esta variavel $data é criada para receber os dados do modelo cadastroAuxiliar que foram
        //armazenados no BD
        $data['cadastro_auxiliar_tipo_manual'] = CadastroAuxiliarTipoManual::all();
        return view('private.cadastros_tipo_manual.cadastro_tipo_manual', $data);
    }
    public function index(){
        $data['cadastro_auxiliar_tipo_manual'] = CadastroAuxiliarTipoManual::all();
       return view('private.cadastros_tipo_manual.listar_cadastros',$data);
    }

    public function store(Request $request){
        CadastroAuxiliarTipoManual::create($request->all());
        $msg = "Cadastro Auxiliar Inserido com Sucesso";
        return redirect()->back()->with('mensagem', $msg);
    }

    public function destroy(Request $request,$id){

        $cadastroMan = CadastroManual::where('tipo_manual', $id)->first();
        if(!$cadastroMan){
            try{
                $cadastrosAux = CadastroAuxiliarTipoManual::find($id);
                $cadastrosAux->delete();
                return redirect()->back()->with(['exclusao', "Cadastro Auxiliar Excluído com Sucesso"]);
            }catch(\Execption $e){
                return redirect()->back()->with('mensagemErro', "Erro ao realizar operação");
            }
        }else{
            return redirect()->back()->with('mensagemErro', "Este tipo manual, está em uso");

        }


    }

    public function update(Request $request, $id){
        $cadastrosAux = CadastroAuxiliarTipoManual::findOrFail($id);
        $cadastrosAux->id_usuario = $request->id_usuario;
        $cadastrosAux->tipo_manual = $request->tipo_manual;
        $cadastrosAux->save();

        $msg = "Cadastro Auxiliar Alterado com Sucesso";
        return redirect()->back()->with('mensagem', $msg);
    }
}
