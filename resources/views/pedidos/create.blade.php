<x-layouts.layout>
    <div class="flex flex-row justify-center items-center min-h-full bg-gray-300">
        <form action="{{ route('pedidos.store') }}" method="POST">
            @csrf
            <div class="bg-white grid grid-cols-2 gap-4 divide-x-8">
                <!-- Datos del Pedido -->
                <div class="bg-white rounded-2xl p-5 grid grid-cols-2 gap-4">
                    <!-- Cliente -->
                    <div>
                        <x-input-label for="cliente_id" value="Cliente"/>
                        <select name="cliente_id" id="cliente_id" class="block mt-1 w-full" required>
                            @foreach ($clientes as $cliente)
                                <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
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
                            <option value="Europeo">Europeo</option>
                            <option value="Americano">Americano</option>
                            <option value="Medio">Medio</option>
                            <option value="Cuadrado">Cuadrado</option>
                            <option value="Industrial">Industrial</option>
                            <option value="Exposicion">Exposición</option>
                            <option value="CP">CP</option>
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
                        <x-text-input id="cantidad_palets" class="block mt-1 w-full" type="number" name="cantidad_palets" required/>
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
                            <option value="pendiente" {{ old('estado') == 'pendiente' ? 'selected' : '' }}>Pendiente</option>
                            <option value="aceptado" {{ old('estado') == 'aceptado' ? 'selected' : '' }}>Aceptado</option>
                            <option value="cancelado" {{ old('estado') == 'cancelado' ? 'selected' : '' }}>Cancelado</option>
                            <option value="enviado" {{ old('estado') == 'enviado' ? 'selected' : '' }}>Enviado</option>
                            <option value="entregado" {{ old('estado') == 'entregado' ? 'selected' : '' }}>Entregado</option>
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
                        <x-text-input id="fecha_entrega" class="block mt-1 w-full" type="date" name="fecha_entrega"/>
                        @error('fecha_entrega')
                        <div class="text-sm text-red-600">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>

                <!-- Botones -->
                <div class="p-2">
                    <button class="btn btn-sm btn-success" type="submit">Crear Pedido</button>
                    <a class="btn btn-sm btn-danger" href="{{ route('pedidos.index') }}">Cancelar</a>
                </div>
            </div>
        </form>
    </div>
</x-layouts.layout>
