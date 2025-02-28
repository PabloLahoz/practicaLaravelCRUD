<header class="md:h-15v bg-blue-300
    flex flex-col md:flex-row justify-between px-3 items-center">

    <div>
        @auth()
            <span class="">{{auth()->user()->name}}</span>
            <form action="{{route("logout")}}" method="post">
                @csrf
                <input class="btn" type="submit" value="Logout">
            </form>
        @endauth

        @guest()
            <a class="btn" href="{{route("login")}}">Login</a>
            <a class="btn" href="{{route("register")}}">Registrar</a>
        @endguest
    </div>
</header>
