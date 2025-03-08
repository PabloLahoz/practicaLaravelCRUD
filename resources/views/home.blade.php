<x-layouts.layout>
    @guest()
        <div class="text-center min-h-full">
            <div class="max-w-md">
                <h1 class="font-bold">Empresa del sector de palets</h1>
                <p>Empresa nº 1 de Aragón</p>
            </div>
        </div>
    @endguest()

    @auth()
        <div class="card card-compact bg-base-100 w-96 shadow-xl">
            <figure>
                <img
                    src="{{asset("/images/clientes.jpg")}}"
                    alt="Clientes"/>
            </figure>
            <div class="card-body">
                <h2 class="card-title">Clientes</h2>
                <p>Gestión tabla clientes</p>
                <div class="card-actions justify-end">
                    <a class="btn btn-primary" href="{{route("clientes.index")}}">Ver clientes</a>
                </div>
            </div>
        </div>

        <div class="card card-compact bg-base-100 w-96 shadow-xl">
            <figure>
                <img
                    src="{{asset("/images/pedidos.jpg")}}"
                    alt="Pedidos"/>
            </figure>
            <div class="card-body">
                <h2 class="card-title">Pedidos</h2>
                <p>Gestión tabla pedidos</p>
                <div class="card-actions justify-end">
                    <a class="btn btn-primary" href="{{route("pedidos.index")}}">Ver pedidos</a>
                </div>
            </div>
        </div>
    @endauth()

</x-layouts.layout>
