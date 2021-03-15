<header>
    <h1>PlaySafe</h1>
    <ul>
        <li>
            <a href="{{route("home")}}" class="{{request()->routeIs("home") ? 'active' : ''}}">
                Home
            </a>
        </li>
        <li>
            <a href="{{route("users.index")}}" class="{{request()->routeIs("users.*") ? 'active' : ''}}">
                Usuarios
            </a>
        </li>
        <li>
            <a href="{{route("nosotros")}}" class="{{request()->routeIs("nosotros") ? 'active' : ''}}">
                Nosotros
            </a>
        </li>
        <li>
            <a href="{{route("sugerencias.index")}}" class="{{request()->routeIs("sugerencias.*") ? 'active' : ''}}">
                Sugerencias
            </a>
        </li>
    </ul>
</header>