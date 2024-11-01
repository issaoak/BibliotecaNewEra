<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    .navbar-cafe {
        background-color: #D2B48C; 
    }
    .navbar-cafe .navbar-brand,
    .navbar-cafe .nav-link {
        color: #FFFFFF !important; 
    }
    .navbar-cafe .nav-link:hover {
        color: #F5DEB3 !important; 
    }
    footer.footer-cafe {
        background-color: #D2B48C; 
        color: #FFFFFF;
        text-align: center;
        padding: 10px 0;
        margin-top: 20px;
    }
    .content-wrapper {
        min-height: 100vh; 
        padding-bottom: 50px;
        box-sizing: border-box;
    }
</style>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-cafe">
        <a class="navbar-brand" href="{{ route('principal') }}">Biblioteca </a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="{{ route('registro') }}">Registro de Libros</a></li>
        </ul>
    </nav>
    <div class="container  content-wrapper mt-4">
        @yield('content')
    </div>
    <footer class="footer-cafe">
        <p>&copy; Biblioteca NewEra, {{ date('Y') }}</p>
    </footer>
</body>
</html>
