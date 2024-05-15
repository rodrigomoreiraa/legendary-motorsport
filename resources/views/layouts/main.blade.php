<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <title>@yield('title')</title>
</head>

<body>
    <section id="header" class="/">
        <header>
            <div class="container-fluid text-center">
                <a href="/">
                    <img src="/img/car-header-new.png" class="img-fluid" alt="picture supercar">
                </a>
            </div>
        </header>
    </section>
    @yield('content')
    <footer class="bg-dark text-white pt-4">
        <div class="container">
            <div class="row">
                <!-- Seção de Navegação -->
                    <div class="col-md-12 mb-4">
                        <h5>Navegação</h5>
                        <ul class="list-unstyled">
                            <li><a href="/anuncio/create" class="text-white">Criar anúncio</a></li>
                            <li><a href="/" class="text-white">Home</a></li>
                            <li><a href="#" class="text-white">Sobre</a></li>
                            <li><a href="#" class="text-white">Serviços</a></li>
                            <li><a href="#" class="text-white">Contato</a></li>
                        </ul>
                        <div class="text-center">
                            <p>&copy MotorSport 2024</p>
                        </div>
                    </div>
            </div>
</body>

</html>