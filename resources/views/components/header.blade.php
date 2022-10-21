<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Produtos
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('produto.listar') }}">Listar</a></li>
                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#cadastrar_produto">Cadastrar</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categorias
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('categoria.listar') }}">Listar</a></li>
                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#cadastrar_categoria">Cadastrar</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
