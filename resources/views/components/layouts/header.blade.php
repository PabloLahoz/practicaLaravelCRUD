<header class="">
    <h1>PALETS ÉPILA</h1>

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
