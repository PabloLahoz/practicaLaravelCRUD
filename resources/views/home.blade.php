<x-layouts.layout titulo="Palets Epila">
    @guest()
        <div class="flex flex-col justify-center items-center pt-10">
            <div class="max-w-xl text-center">
                <h1 class="text-3xl text-black">Empresa del sector de palets</h1>
                <p>Empresa nº 1 de Aragón</p>
                <img class="" src="{{asset("images/palets.png")}}" alt="">
            </div>
        </div>
    @endguest()

    @auth()
        <div class="flex items-center justify-center p-4">
            <div class="card card-compact bg-base-100 w-96 shadow-xl mr-8">
                <figure>
                    <img class="h-56"
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
                    <img class="h-56 w-96"
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
        </div>
    @endauth()

</x-layouts.layout>
