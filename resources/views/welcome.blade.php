<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tesalia Sports</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://kit.fontawesome.com/dcb1bbced2.js" crossorigin="anonymous"></script>
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
                        <li><a href="{{ route('login') }}"<i class="fas fa-sign-in-alt me-1"></i> Log in</a></li>
                        @if (Route::has('register'))
                        <li><a href="{{ route('register') }}"<i class="fas fa-user-plus me-1"></i> Register</a></li>
                        @endif
                    @endauth
                </ul>
            </nav>
            @endif
        </div>

        <div class="header-content container">
            <div class="header-txt">
                <div id="carouselAuto" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselAuto" data-bs-slide-to="0" class="active"></button>
                        <button type="button" data-bs-target="#carouselAuto" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#carouselAuto" data-bs-slide-to="2"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('img/ruta2.jpg') }}" class="d-block w-100" alt="Imagen 1">
                        </div>
                        <div class="carousel-item">
                            <img src="imagen2.jpg" class="d-block w-100" alt="Imagen 2">
                        </div>
                        <div class="carousel-item">
                            <img src="imagen3.jpg" class="d-block w-100" alt="Imagen 3">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselAuto" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselAuto" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
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
