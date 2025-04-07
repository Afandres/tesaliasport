<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tesalia Sports</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://kit.fontawesome.com/dcb1bbced2.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</head>
<body>

    <header class="header">
        <div class="menu container">
            <a href="#" class="logo">Tesalia Sports</a>
            <input type="checkbox" id="menu">
            <label for="menu"><i class="fas fa-bars"></i></label>
            @if (Route::has('login'))
            <nav class="navbar">
                <ul>
                    <li><a href="#"><i class="fa-solid fa-image"></i> Inicio</a></li>
                    <li><a href="#"><i class="fas fa-clipboard-list me-1"></i> Inscripciones</a></li>
                    <li><a href="#"><i class="fas fa-users me-1"></i> Sobre Nosotros</a></li>
                    <li><a href="#"><i class="fas fa-newspaper me-1"></i> Noticias</a></li>
                    <li><a href="#"><i class="fas fa-envelope me-1"></i> Contacto</a></li>

                    @auth
                        <li><a href="{{ url('/dashboard') }}" class="btn btn-outline-light btn-sm"><i class="fas fa-tachometer-alt me-1"></i> Dashboard</a></li>
                    @else
                        <li><a href="{{ route('login') }}"><i class="fas fa-sign-in-alt me-1"></i> Ingresar</a></li>
                    @endauth
                </ul>
            </nav>
            @endif
        </div>

        <div class="header-content container">
            <div class="header-txt">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="{{ asset('img/ruta2.jpg') }}" class="d-block w-100" alt="Imagen 1">
                      </div>
                      <div class="carousel-item">
                        <img src="{{ asset('img/ruta2.jpg') }}" class="d-block w-100" alt="Imagen 1">
                      </div>
                      <div class="carousel-item">
                        <img src="{{ asset('img/ruta2.jpg') }}" class="d-block w-100" alt="Imagen 1">
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </header>

    <main class="categories-section container" id="categorias">
        <h2>Inscripciones</h2>
        <p>¡No dejes pasar la oportunidad de vivir el deporte al máximo!</p>
        <div class="categories-content">
  ;
            @foreach ($categories as $category)
            
                <div class="category-card">
                    <div class="icon" style="font-size: 3rem;"><i class="{{ $category->icon }}"></i></div>
                    <h3>{{ $category->name }}</h3>
                    <a href="#" class="btn">Ver más</a>
                </div>
            @endforeach
        </div>
    </main>

    <section class="contact container">
        <!-- Puedes agregar un formulario de contacto aquí -->
    </section>

    <footer class="footer">
        <div class="footer-content container">
            <div class="link">
                <h3>Enlaces</h3>
                <a href="#">Inicio</a>
                <a href="#">Inscripciones</a>
                <a href="#">Sobre Nosotros</a>
                <a href="#">Contacto</a>
            </div>
            <div class="link">
                <h3>Redes Sociales</h3>
                <a href="#">Facebook</a>
                <a href="#">Instagram</a>
                <a href="#">Twitter</a>
                <a href="#">YouTube</a>
            </div>
        </div>
    </footer>
</body>
</html>
