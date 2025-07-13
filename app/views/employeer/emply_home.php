<!-- Inicia sesión según el rol del usuario -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>

    <!-- Estilos CSS -->
    <link rel="stylesheet" href="/Self-Management/public/css/style.css">
    <link rel="stylesheet" href="/Self-Management/public/css/normalize.css">

    <!-- Ícono de pestaña -->
    <link id="favicon" rel="icon" type="image/png" href="/Self-Management/public/images/short_lg-dark.png">

    <!-- Scripts JS -->
    <script src="/Self-Management/public/js/icon-theme.js"></script>
</head>

<body>
    <!-- Mensaje dinámico basado en la zona horaria del servidor -->
    <?php
    date_default_timezone_set('America/Bogota');
    $hora = date('H');

    if ($hora >= 5 && $hora < 12) {
        $saludo = "Buenos días, Técnico";
        $mensaje = "Un nuevo día comienza. Es momento de liderar, organizar y optimizar cada proceso del sistema.";
    } elseif ($hora >= 12 && $hora < 18) {
        $saludo = "Buenas tardes, Administrador";
        $mensaje = "La jornada continúa. Sigue supervisando, tomando decisiones clave y asegurando el funcionamiento eficiente de la plataforma.";
    } else {
        $saludo = "Buenas noches, Administrador";
        $mensaje = "El día llega a su fin. Aprovecha este momento para revisar los últimos detalles y dejar todo listo para mañana.";
    }
    ?>

    <!-- Sidebar compartido (componente reutilizable) -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/Self-Management/app/views/shared/sidebar_employ.php'; ?>

    <main>
        <div class="container">
            <div class="welcome-container">
                <div class="welcome-content">
                    <h1><?php echo $saludo; ?> al Dashboard</h1>
                    <p><?php echo $mensaje; ?></p>
                    <button class="button success">Ver detalles</button>
                </div>
                <div class="welcome-image">
                    <img src="/Self-Management/public/images/render1.png" alt="Imagen del Dashboard">
                </div>
            </div>
        </div>
    </main>
</body>

</html>
