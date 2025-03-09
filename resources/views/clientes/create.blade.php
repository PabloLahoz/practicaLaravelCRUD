<x-layouts.layout>
    <div class="flex justify-center items-center bg-white">
        <form action="{{ route('clientes.store') }}" method="POST" class="bg-white p-6 rounded-2xl shadow-xl shadow-gray-300 w-full max-w-lg pt-20">
            @csrf

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <x-input-label for="nombre" value="Nombre" />
                    <x-text-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" value="{{ old('nombre') }}" />
                    @error("nombre")
                    <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <x-input-label for="email" value="Email" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="email" />
                    @error("email")
                    <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <x-input-label for="telefono" value="Teléfono" />
                    <x-text-input id="telefono" class="block mt-1 w-full" type="text" name="telefono" value="{{ old('telefono') }}" required autofocus autocomplete="tel" />
                    @error("telefono")
                    <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <x-input-label for="direccion" value="Dirección" />
                    <x-text-input id="direccion" class="block mt-1 w-full" type="text" name="direccion" value="{{ old('direccion') }}" required autofocus autocomplete="street-address" />
                    @error("direccion")
                    <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="mt-4 flex space-x-2">
                <button class="px-4 py-2 text-black bg-gray-300 rounded hover:bg-gray-200" type="submit">{{__("Guardar")}}</button>
                <a class="px-4 py-2 text-black bg-gray-300 rounded hover:bg-gray-200" href="{{ route('clientes.index') }}">{{__("Cancel")}}</a>
            </div>
        </form>
    </div>
</x-layouts.layout>
