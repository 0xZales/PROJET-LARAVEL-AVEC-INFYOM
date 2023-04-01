<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Acceuil</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('filieres.index') }}" class="nav-link {{ Request::is('filieres*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Filieres</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('etudiants.index') }}" class="nav-link {{ Request::is('etudiants*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Etudiants</p>
    </a>
</li>
