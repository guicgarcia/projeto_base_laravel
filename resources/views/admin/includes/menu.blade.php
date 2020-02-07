<div class="d-flex">
    <nav class="sidebar">
        <ul class="list-unstyled">
            <li><a href="{{ route('admin.home') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
            <li>
                <a href="#submenu1" data-toggle="collapse">
                    <i class="fas fa-user"></i> Usuário
                </a>
                <ul id="submenu1" class="list-unstyled collapse">
                    <li><a href="{{ route('admin.users.index') }}"><i class="fas fa-users"></i> Usuários</a></li>
                    <li><a href="{{ route('admin.cat-imagem.index') }}"><i class="fas fa-list-ol"></i> Categoria Imagem</a></li>
                </ul>
            </li>
            <li>
                <a href="#submenu2" data-toggle="collapse">
                    <i class="fas fa-images"></i> Imagem
                </a>
                <ul id="submenu2" class="list-unstyled collapse">
                    <li><a href="{{ route('admin.imagens.index') }}"><i class="far fa-image"></i> Imagem</a></li>
                    <li><a href="{{ route('admin.cat-imagem.index') }}"><i class="fas fa-file-image"></i> Categoria da Imagem</a></li>
                </ul>
            </li>
            <li>
                <a href="#submenu3" data-toggle="collapse"><i class="fas fa-list-ul"></i> Menu</a>
                <ul id="submenu3" class="list-unstyled collapse">
                    <li><a href="#"><i class="fas fa-file-alt"></i> Páginas</a></li>
                    <li><a href="#"><i class="fab fa-elementor"></i> Item de Menu</a></li>
                </ul>

            </li>
            <li><a href="#"><i class="fas fa-sign-out-alt"></i> Sair</a></li>
        </ul>
    </nav>


