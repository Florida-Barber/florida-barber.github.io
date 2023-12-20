<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Particles JS</title>
    <!-- Estilos CSS -->
    <link rel="stylesheet" href="./css/estilos.css">    
</head>
<body>
    <!-- ID Particles.js -->
    <div id="particles-js"></div>
    <header class="contenedor">

        <!-- Barra de navegación -->
        <div class="nav">
            <h1 class="titulo-bienvenida">FLORIDA</h1>
        </div>
        <!-- Título y descripción -->
        <div class="section">
            <div class="contenido">
                <p class="Titulo">Bienvenido a Florida Barber Shop</p>
                <p class="Subtitulo">Tu barbería de confianza, agenda una cita o únete a nuestro grupo de Ecosistema FLORIDA.</p>
                <div class="btn-container">
                    <button>Agendar Cita
                    <?php include('button.html');?>
                    </button>
                    <button>Inscribirse al Curso
                    <?php include('button.html');?>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- JS Particles.js -->
    <script src="json/particles.min.js"></script>
    <script src="json/app2.json"></script>
</body>
</html>