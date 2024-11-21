<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sidenav shadow-right sidenav-light">
            <div class="sidenav-menu">
                <div class="nav accordion" id="accordionSidenav">
                    <div class="sidenav-menu-heading">Pages</div>
                    <a class="nav-link collapsed" href="{{ route('dashboard') }}">
                        <div class="nav-link-icon"><i data-feather="activity"></i></div>
                        Tableau de bord
                    </a>
                    <hr>
                    @if (Auth::user()->role == 'Admin')
                        <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                            data-bs-target="#pagesCollapseError1" aria-expanded="false"
                            aria-controls="pagesCollapseError">
                            <div class="nav-link-icon"><i data-feather="repeat"></i></div>
                            COTISATIONS
                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseError1" data-bs-parent="#accordionSidenavPagesMenu">
                            <nav class="sidenav-menu-nested nav">
                                <a class="nav-link" href="{{ route('gestion_cotisations.create') }}">Cotisation
                                    mensuelle</a>
                                <a class="nav-link" href="{{ route('cotisation_ponctuelle') }}">Cotisation
                                    ponctuelle</a>
                                <a class="nav-link" href="{{ route('gestion_cotisations.index') }}">Liste des
                                    cotisations</a>
                            </nav>
                        </div>
                        <hr>
                        <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                            data-bs-target="#pagesCollapseError2" aria-expanded="false"
                            aria-controls="pagesCollapseError">
                            <div class="nav-link-icon"><i data-feather="repeat"></i></div>
                            DEPENSES
                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseError2" data-bs-parent="#accordionSidenavPagesMenu">
                            <nav class="sidenav-menu-nested nav">
                                <a class="nav-link" href="{{ route('gestion_depenses.create') }}">Faire une dépense</a>
                                <a class="nav-link" href="{{ route('gestion_depenses.index') }}">Liste des dépenses</a>
                            </nav>
                        </div>
                        <hr>
                    @endif
                    <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                        data-bs-target="#pagesCollapseError3" aria-expanded="false" aria-controls="pagesCollapseError">
                        <div class="nav-link-icon"><i data-feather="repeat"></i></div>
                        MES COTISATIONS
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="pagesCollapseError3" data-bs-parent="#accordionSidenavPagesMenu">
                        <nav class="sidenav-menu-nested nav">
                            <a class="nav-link" href="{{ route('find_cotisation') }}">Mes cotisations</a>
                        </nav>
                    </div>
                    <hr>
                </div>
            </div>
            <img class="text-center" src="{{ asset('images/logo.png') }}" alt="logo" width="150px"
                style="margin: auto">
        </nav>
    </div>
