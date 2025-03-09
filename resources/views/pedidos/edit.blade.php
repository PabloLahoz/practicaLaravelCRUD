<x-layouts.layout>
    <div class="flex flex-row justify-center items-center min-h-full bg-white">
        <!-- Session Status -->
        <form id="formulario" action="{{ route('pedidos.update', $pedido->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="bg-white rounded-2xl p-5 shadow-md">
                <!-- Cliente -->
                <div>
                    <x-input-label for="cliente_id" value="Cliente"/>
                    <select name="cliente_id" id="cliente_id" class="block mt-1 w-full" required>
                        @foreach ($clientes as $cliente)
                            <option value="{{ $cliente->id }}" {{ $cliente->id == $pedido->cliente_id ? 'selected' : '' }}>
                                {{ $cliente->nombre }}
                            </option>
                        @endforeach
                    </select>
                    @error('cliente_id')
                    <div class="text-sm text-red-600">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <!-- Tipo de Palet -->
                <div>
                    <x-input-label for="tipo_palets" value="Tipo de Palet"/>
                    <select name="tipo_palets" id="tipo_palets" class="block mt-1 w-full" required>
                        <option value="Europeo" {{ $pedido->tipo_palets == 'Europeo' ? 'selected' : '' }}>Europeo</option>
                        <option value="Americano" {{ $pedido->tipo_palets == 'Americano' ? 'selected' : '' }}>Americano</option>
                        <option value="Medio" {{ $pedido->tipo_palets == 'Medio' ? 'selected' : '' }}>Medio</option>
                        <option value="Cuadrado" {{ $pedido->tipo_palets == 'Cuadrado' ? 'selected' : '' }}>Cuadrado</option>
                        <option value="Industrial" {{ $pedido->tipo_palets == 'Industrial' ? 'selected' : '' }}>Industrial</option>
                        <option value="Exposicion" {{ $pedido->tipo_palets == 'Exposicion' ? 'selected' : '' }}>Exposición</option>
                        <option value="CP" {{ $pedido->tipo_palets == 'CP' ? 'selected' : '' }}>CP</option>
                    </select>
                    @error('tipo_palets')
                    <div class="text-sm text-red-600">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <!-- Cantidad de Palets -->
                <div>
                    <x-input-label for="cantidad_palets" value="Cantidad de Palets"/>
                    <x-text-input id="cantidad_palets" class="block mt-1 w-full" type="number" name="cantidad_palets"
                                  value="{{ old('cantidad_palets', $pedido->cantidad_palets) }}" required/>
                    @error('cantidad_palets')
                    <div class="text-sm text-red-600">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <!-- Estado -->
                <div>
                    <x-input-label for="estado" value="Estado"/>
                    <select name="estado" id="estado" class="block mt-1 w-full" required>
                        <option value="pendiente" {{ $pedido->estado == 'pendiente' ? 'selected' : '' }}>Pendiente</option>
                        <option value="aceptado" {{ $pedido->estado == 'aceptado' ? 'selected' : '' }}>Aceptado</option>
                        <option value="cancelado" {{ $pedido->estado == 'cancelado' ? 'selected' : '' }}>Cancelado</option>
                        <option value="enviado" {{ $pedido->estado == 'enviado' ? 'selected' : '' }}>Enviado</option>
                        <option value="entregado" {{ $pedido->estado == 'entregado' ? 'selected' : '' }}>Entregado</option>
                    </select>
                    @error('estado')
                    <div class="text-sm text-red-600">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <!-- Fecha de Entrega -->
                <div>
                    <x-input-label for="fecha_entrega" value="Fecha de Entrega"/>
                    <x-text-input id="fecha_entrega" class="block mt-1 w-full" type="date" name="fecha_entrega"
                                  value="{{ old('fecha_entrega', $pedido->fecha_entrega) }}"/>
                    @error('fecha_entrega')
                    <div class="text-sm text-red-600">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <!-- Botones -->
                <div class="p-2">
                    <button class="px-4 py-2 text-black bg-gray-300 rounded hover:bg-gray-200" type="button" onclick="confirmUpdate()">{{__("Guardar")}}</button>
                    <a class="px-4 py-2 text-black bg-gray-300 rounded hover:bg-gray-200" href="{{ route('pedidos.index') }}">{{__("Cancel")}}</a>
                </div>
            </div>
        </form>
    </div>

    <script>
        function confirmUpdate() {
            swal({
                title: "¿Confirmar actualización?",
                text: "Esta acción no se puede deshacer",
                icon: "warning",
                buttons: ["Cancelar", "Sí, actualizar"],
                dangerMode: true
            }).then(function (willUpdate) {
                if (willUpdate) {
                    let formulario = document.getElementById("formulario");
                    formulario.submit();
                }
            })
        }
    </script>
</x-layouts.layout>
