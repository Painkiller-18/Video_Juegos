<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;

class juegosoferts extends Model
{
    use HasFactory;
    use Softdeletes;
    protected $primaryKey ='id_of';
    protected $fillable =['id_of','id_p','idtipo','fecha_ini','fecha_fin','motivo','precio','descuento','Activo','Aviso_priv'];
}
