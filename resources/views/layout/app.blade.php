<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


    @component('components.sidebar_css')
    @endcomponent

</head>
<body>
    <header class="header shadow-sm bg-body rounded">
        @component('components.header')
        @endcomponent
    </header>

    <main class="container my-2">
        @yield('content')
    </main>

    <footer class="fixed-bottom d-flex justify-content-center">
        @component('components.footer')

        @endcomponent
    </footer>

    @component('components.modal_cadastro_produto', ['categorias' => $categorias])
    @endcomponent

    @component('components.modal_cadastro_categoria')
    @endcomponent

    @isset($produtoEdit)
    @component('components.modal_editar_produto', ['categorias' => $categorias, 'produtoEdit' => $produtoEdit])
    @endcomponent
    @endisset

    @isset($categoriaEdit)
    @component('components.modal_editar_categoria', ['categorias' => $categorias, 'categoriaEdit' => $categoriaEdit])
    @endcomponent
    @endisset

    @isset($menssagem)
    @component('components.modal_menssagem', ['menssagem' => $menssagem])
    @endcomponent
    @endisset

</body>
</html>
