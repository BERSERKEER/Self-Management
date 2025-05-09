<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <!-- Estilos -->
    <link rel="stylesheet" href="/Self-Management/public/css/style.css">
    <link rel="stylesheet" href="/Self-Management/public/css/normalize.css">
    <!-- Icono -->
    <link id="favicon" rel="icon" type="image/png" href="/Self-Management/public/images/short_lg-dark.png">
    <!-- Scripts -->
    <script src="/Self-Management/public/js/icon-theme.js"></script>
</head>

<body>
    <?php
    // Zona horaria y mensajes según hora
    date_default_timezone_set('America/Bogota');
    $hora = date('H');

    if ($hora >= 5 && $hora < 12) {
        $saludo = "Buenos días, Administrador";
        $mensaje = "Comienza un nuevo día para liderar y optimizar la gestión del sistema.";
    } elseif ($hora >= 12 && $hora < 18) {
        $saludo = "Buenas tardes, Administrador";
        $mensaje = "Continúa supervisando las operaciones y asegurando un flujo eficiente.";
    } else {
        $saludo = "Buenas noches, Administrador";
        $mensaje = "Antes de cerrar el día, verifica los reportes clave para mantener el control.";
    }
    ?>

    <!-- Sidebar -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/Self-Management/app/views/shared/sidebar_admin.php'; ?>

    <main>
        <div class="container">
            <div class="welcome-container">
                <div class="welcome-content">
                    <h1><?php echo $saludo; ?></h1>
                    <p><?php echo $mensaje; ?></p>
                    <p>Desde este panel podrás visualizar métricas, gestionar recursos y tomar decisiones informadas con base en datos actualizados.</p>
                    <a href="/Self-Management/app/views/admin/admin_dashboard.php" class="link-buttons">Ir al Panel de Control</a>
                </div>
                <div class="welcome-image">
                    <img src="/Self-Management/public/images/render1.png" alt="Imagen del Dashboard">
                </div>
            </div>
        </div>
    </main>
</body>

</html>
