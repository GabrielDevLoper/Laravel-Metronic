<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cadastroAuxiliar;

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

        $msg = "Cadastro Auxiliar Inserido com Sucesso";
        return redirect()->back()->with('mensagem', $msg);
    }

    public function destroy($id){
        $cadastrosAux = cadastroAuxiliar::findOrFail($id);
        $cadastrosAux->delete();

        $msg = "Cadastro Auxiliar Excluído com Sucesso";
        return redirect()->back()->with('exclusao', $msg);
    }

    public function update(Request $request, $id){
        $cadastrosAux = cadastroAuxiliar::findOrFail($id);
        $cadastrosAux->id_usuario = $request->id_usuario;
        $cadastrosAux->tipo_manual = $request->tipo_manual;
        $cadastrosAux->save();

        $msg = "Cadastro Auxiliar Alterado com Sucesso";
        return redirect()->back()->with('mensagem', $msg);
    }
}
