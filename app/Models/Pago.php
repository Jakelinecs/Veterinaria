<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;


    protected $table = 'pagos';

    protected $fillable = [
        'idservicio',
        'fecha',
        'nombre',
        'numero_referencia',
        'monto',
        'metodo_pago',
        'descripcion',
        'estado_pago',
    ];

    public function servicio()
    {
        return $this->belongsTo(Servicio::class, 'idservicio');
    }

}
