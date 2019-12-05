<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cadastroAuxiliar;
use App\CadastroManual;
use App\Http\Requests\ValidaRequest;

class cadastroAuxiliarController extends Controller
{

    public function getCadastroAux(){
        //esta variavel $data é criada para receber os dados do modelo cadastroAuxiliar que foram
        //armazenados no BD
        $data['cadastro_auxiliar_tipo_manual'] = cadastroAuxiliar::all();
        return view('private.cadastros_tipo_manual.cadastro_tipo_manual', $data);
    }
    public function index(){
        $data['cadastro_auxiliar_tipo_manual'] = cadastroAuxiliar::all();
       return view('private.cadastros_tipo_manual.listar_cadastros',$data);
    }

    public function store(Request $request){
        CadastroAuxiliar::create($request->all());
        /*$cadastrosAux = new cadastroAuxiliar;
        $cadastrosAux->id_usuario = $request->id_usuario;
        $cadastrosAux->tipo_manual = $request->tipo_manual;
        $cadastrosAux->save();*/

        return redirect()->back()->with('mensagem', "Cadastro Auxiliar Inserido com Sucesso");
    }

    public function destroy(ValidaRequest $request,$id){
        
        $cadastrosAux = cadastroAuxiliar::find($id);
        //$cadastroMan = CadastroManual::where('tipo_manual', $id)->first();
        if($cadastrosAux){
            try{
                $cadastrosAux->delete();
                return redirect()->back()->with(['exclusao', "Cadastro Auxiliar Excluído com Sucesso"]);
            }catch(\Execption $e){
                return redirect()->back()->with('mensagemErro', "Erro ao realizar operação");
            }
        }

        
    }

    public function update(Request $request, $id){
        $cadastrosAux = cadastroAuxiliar::findOrFail($id);
        $cadastrosAux->id_usuario = $request->id_usuario;
        $cadastrosAux->tipo_manual = $request->tipo_manual;
        $cadastrosAux->save();

        
        return redirect()->back()->with('mensagem', "Cadastro Auxiliar Alterado com Sucesso");
    }
}
