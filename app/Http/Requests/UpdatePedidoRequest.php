<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePedidoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'cliente_id' => 'required|exists:clientes,id',
            'tipo_palets' => 'required|in:Europeo,Americano,Medio,Cuadrado,Industrial,Exposicion,CP',
            'cantidad_palets' => 'required|integer|min:1',
            'estado' => 'required|in:pendiente,aceptado,cancelado,enviado,entregado',
            'fecha_entrega' => 'nullable|date',
        ];
    }
}
