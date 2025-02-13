<x-layouts.layout>
    @guest()
        <div class="text-center">
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
                    src="{{asset("/images/gestion.jpg")}}"
                    alt="Gestion"/>
            </figure>
            <div class="card-body">
                <h2 class="card-title">Shoes!</h2>
                <p>If a dog chews shoes whose shoes does he choose?</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
        </div>
    @endauth()

</x-layouts.layout>
