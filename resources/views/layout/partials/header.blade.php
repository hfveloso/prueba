<header>
    <ul>
        <h1>Curso Laravel</h1>
        <li>
            <a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active' : ''}}">Home</a>
        </li>
        <li>
            <a href="{{route('cursos.index')}}" class="{{request()->routeIs('cursos.*') ? 'active' : ''}}">Cursos</a>
        </li>
        <li>
            <a href="{{route('otros')}}" class="{{request()->routeIs('otros') ? 'active' : ''}}">Otros</a>
        </li>
        <li>
            <a href="{{route('contactanos.index')}}" class="{{request()->routeIs('contactanos.index') ? 'active' : ''}}">Contactanos</a>
        </li>
    </ul>
</header>