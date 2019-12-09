<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class UsuarioIntrajus extends Authenticatable
{
    protected $table = 'tb_usuario';
    protected $connection = 'intranet_tj';
    protected $primaryKey = 'id_usuario';
}
