<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePedidoRequest extends FormRequest
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

    public function messages()
    {
        return [
            'cliente_id.required' => 'El cliente es obligatorio.',
            'cliente_id.exists' => 'El cliente seleccionado no existe.',
            'tipo_palets.required' => 'El tipo de palet es obligatorio.',
            'tipo_palets.in' => 'El tipo de palet debe ser uno de los siguientes: Europeo, Americano, Medio, Cuadrado, Industrial, Exposición, CP.',
            'cantidad_palets.required' => 'La cantidad de palets es obligatoria.',
            'cantidad_palets.integer' => 'La cantidad de palets debe ser un número entero.',
            'cantidad_palets.min' => 'La cantidad de palets debe ser al menos 1.',
            'estado.required' => 'El estado del pedido es obligatorio.',
            'estado.in' => 'El estado del pedido debe ser uno de los siguientes: pendiente, aceptado, cancelado, enviado, entregado.',
            'fecha_entrega.date' => 'La fecha de entrega debe ser una fecha válida.',
        ];
    }
}
