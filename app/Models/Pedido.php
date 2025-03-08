<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    /** @use HasFactory<\Database\Factories\PedidoFactory> */
    use HasFactory;

    public $fillable = ['cliente_id','tipo_palets','cantidad_palets','estado','fecha_entrega'];

    public function cliente() {
        return $this->belongsTo(Cliente::class);
    }
}
