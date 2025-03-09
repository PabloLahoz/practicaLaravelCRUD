<x-layouts.layout>
    <div class="flex flex-row justify-center items-center min-h-full bg-white>
        <!-- Session Status -->
        <form action="{{route("clientes.update", $cliente->id)}}" method="POST">
            @method('PUT')
            @csrf
            <div class="bg-white rounded-2xl p-5 shadow-xl">
                <div>
                    <x-input-label for="name" value="Nombre"/>
                    <x-text-input id="nombre" class="block mt-1 w-full" type="text" name="nombre"
                                  value="{{ $cliente->nombre}}"/>
                    @error("nombre")
                    <div class="text-sm text-red-600">
                        {{$message}}
                    </div>
                    @enderror


                </div>
                <div>
                    <x-input-label for="email" value="Email"/>
                    <x-text-input id="email" class="block mt-1 w-full"
                                  type="email" name="email"
                                  value="{{$cliente->email}}"
                                  required autofocus autocomplete="email" />
                    @error("email")
                    <div class="text-sm text-red-600">
                        {{$message}}
                    </div>
                    @enderror

                </div>
                <div>
                    <x-input-label for="telefono" value="Teléfono" />

                    <x-text-input id="telefono" class="block mt-1 w-full"
                                  type="text" name="telefono"
                                  value="{{$cliente->telefono}}"
                                  required autofocus autocomplete="Número de teléfono" />
                    @error("telefono")
                    <div class="text-sm text-red-600">
                        {{$message}}
                    </div>
                    @enderror

                </div>
                <div>
                    <x-input-label for="direccion" value="Dirección" />
                    <x-text-input id="direccion" class="block mt-1 w-full"
                                  type="text" name="direccion"
                                  value="{{$cliente->direccion}}"
                                  required autofocus autocomplete="Dirección"/>
                    @error("direccion")
                    <div class="text-sm text-red-600">
                        {{$message}}
                    </div>
                    @enderror

                </div>
                <div class="p-2">
                    <button class= "px-4 py-2 text-black bg-gray-300 rounded hover:bg-gray-200" type="submit">{{__("Guardar")}} </button>
                    <a class= "px-4 py-2 text-black bg-gray-300 rounded hover:bg-gray-200" href="{{route("clientes.index")}}">{{__("Cancel")}}</a>
                </div>
            </div>

        </form>
    </div>

</x-layouts.layout>
