<nav class="navbar navbar-expand navbar-dark bg-primary">
    <a class="sidebar-toggle text-light mr-3">
        <span class="navbar-toggler-icon"></span>
    </a>
    <a class="navbar-brand" href="#">Admin</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle menu-header" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">
                    <img class="rounded-circle" src="{{ env('APP_URL') }}/imagens/logo.png" width="20" height="20"> &nbsp;<span class="d-none d-sm-inline">{{ Auth::user()->name }}</span> 
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#"> <i class="fas fa-user"></i> Perfil</a>
                    <a class="dropdown-item" href="{{ route('admin.logout') }}"> <i class="fas fa-sign-out-alt"></i> Sair</a>
                </div>
            </li>
        </ul>                
    </div>
</nav>