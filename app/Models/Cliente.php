<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    /** @use HasFactory<\Database\Factories\ClienteFactory> */
    use HasFactory;

    public $fillable = ["nombre","email","telefono","direccion"];

    public function pedidos() {
        return $this->hasMany(Pedido::class);
    }
}
