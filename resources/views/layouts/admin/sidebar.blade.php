<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#moderateur-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Moderateur</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="moderateur-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('moderateurs.create') }}">
                        <i class="bi bi-circle"></i><span>Ajouter</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('moderateurs.index') }}">
                        <i class="bi bi-circle"></i><span>Liste</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#user-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Utilisateur</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="user-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('users.index') }}">
                        <i class="bi bi-circle"></i><span>Liste</span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>

</aside>
