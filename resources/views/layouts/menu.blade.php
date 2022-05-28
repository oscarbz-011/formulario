<li class="nav-item {{ Request::is('formularios*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('formularios.index') }}">
       <i class="fa fa-wpforms" aria-hidden="true"></i>
        <span>Formularios</span>
    </a>
</li>
<li class="nav-item {{ Request::is('rubros*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('rubros.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Rubros</span>
    </a>
</li>
<li class="nav-item {{ Request::is('ciudads*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('ciudads.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Ciudads</span>
    </a>
</li>
<li class="nav-item {{ Request::is('departamentos*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('departamentos.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Departamentos</span>
    </a>
</li>
