<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cadastroAuxiliar extends Model
{
    protected $fillable = ['id_usuario','tipo_manual'];
    protected $guarded = ['id','created_at', 'updated_at'];
    protected $table = 'cadastro_auxiliar_tipo_manual';
}
