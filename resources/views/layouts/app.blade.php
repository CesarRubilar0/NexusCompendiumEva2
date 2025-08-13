<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Nexus Compendium - IPSS')</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}?v=<?php echo time(); ?>">
   
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    
    @yield('styles')
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('images/logo.png') }}?v=<?php echo time(); ?>" alt="Nexus Compendium Logo" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/proyectos') }}">Proyectos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/usuarios') }}">Usuarios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/actores') }}">Actores de Interés</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/reportes') }}">Reportes</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                         <li class="nav-item">
                            <a class="nav-link" href="{{ url('/login') }}">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container">
        @yield('content')
    </main>

    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>📚 Nexus Compendium</h3>
                <p>Sistema de Gestión de Proyectos de Vinculación con el Medio</p>
                <p>Instituto Profesional San Sebastián</p>
                <p style="margin-top: 1rem;">
                    <strong>Conectando conocimiento con impacto social</strong>
                </p>
            </div>
            <div class="footer-section">
                <h3>📞 Contacto</h3>
                <p>📍 Av. Principal 123, Santiago, Chile</p>
                <p>📧 contacto@nexuscompendium.cl</p>
                <p>☎️ +56 2 2234 5678</p>
                <p>🌐 www.nexuscompendium.cl</p>
            </div>
            <div class="footer-section">
                <h3>🔗 Enlaces Rápidos</h3>
                <p><a href="/proyectos">Ver Proyectos Activos</a></p>
                <p><a href="/usuarios">Gestión de Usuarios</a></p>
                <p><a href="/institutos">Instituciones Aliadas</a></p>
                <p><a href="/reportes">Reportes y Estadísticas</a></p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; {{ date('Y') }} Nexus Compendium - Instituto Profesional San Sebastián. Todos los derechos reservados.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
        // Script para marcar el enlace activo en la barra de navegación
        document.addEventListener('DOMContentLoaded', function() {
            const currentPath = window.location.pathname;
            document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
                const linkPath = new URL(link.href).pathname;
                
                // Caso especial para el Dashboard
                if ((currentPath === '/' || currentPath === '/dashboard') && (linkPath === '/' || linkPath === '/dashboard')) {
                    link.classList.add('active');
                } else if (currentPath.startsWith(linkPath) && linkPath !== '/') {
                    link.classList.add('active');
                }
            });
        });
    </script>
    
    <!-- Yield para cargar scripts específicos de cada página -->
    @yield('scripts')
</body>
</html>
