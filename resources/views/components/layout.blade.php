<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} - Sistema Escola Regional</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="" href="{{ asset('/node_modules/@fortawesome/fontawesome-free/css/fontawesome.css') }}">
    <link rel="" href="{{ asset('/node_modules/@fortawesome/fontawesome-free/css/brands.css') }}">
    <link rel="" href="{{ asset('/node_modules/@fortawesome/fontawesome-free/css/solid.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

</head>

<style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }

    .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
    }

    .bi {
        vertical-align: -.125em;
        fill: currentColor;
    }

    .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
    }

    .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
    }

    .form-control:focus {
        border-color: #cccccc;
        outline: 0;
        -webkit-box-shadow: none;
        box-shadow: none;
    }

    .form-select:focus {
        border-color: #cccccc;
        outline: 0;
        -webkit-box-shadow: none;
        box-shadow: none;
    }

    .form-control {
        border-radius: 0;
    }

    .form-select {
        border-radius: 0;
    }

    body {
        background-image: url('');
    }
</style>

<body class="d-flex flex-column h-100">
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">{{ $title }} - Sistema Escola Regional</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('alunos.index') }}">Geral</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('alunos.create') }}">Incluir Aluno</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">Notas</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>

    <main class="flex-shrink-0">
        <div class="container">
            <br>
            @if ($errors->any())
                <div class="alert alert-danger m-5 p-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{ $slot }}
        </div>
    </main>


    {{-- <footer class="footer mt-auto py-3 bg-light">
        <div class="container">
            <span class="text-muted">Place sticky footer content here.</span>
        </div>
    </footer> --}}

</body>

</html>
