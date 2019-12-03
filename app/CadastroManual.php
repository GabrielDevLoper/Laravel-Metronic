<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CadastroManual extends Model
{
    protected $fillable = ['descricao', 'tipo_manual','arquivo_pdf', 'id_usuario'];
  //  protected $guarded = ['id', 'updated_at', 'created_at'];
    protected $table = 'cadastro_manual';
}
