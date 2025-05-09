<!--Inicia session ven base al rol-->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <!-- CSS Styles -->
    <link rel="stylesheet" href="/Self-Management/public/css/style.css">
    <link rel="stylesheet" href="/Self-Management/public/css/normalize.css">
    <!-- Favicon/images -->
    <link id="favicon" rel="icon" type="image/png" href="/Self-Management/public/images/short_lg-dark.png">
    <!-- JS Scripts -->
    <script src="/Self-Management/public/js/icon-theme.js"></script>
</head>

<body>
    <?php
    // Establece la zona horaria
    date_default_timezone_set('America/Bogota');
    $hora = date('H');

    // Saludo y mensaje personalizado para cliente
    if ($hora >= 5 && $hora < 12) {
        $saludo = "¡Buenos días!";
        $mensaje = "Esperamos que tengas una mañana productiva. Explora las herramientas disponibles para agendar tus citas, gestionar tus solicitudes y mantenerte al tanto de tus actividades.";
    } elseif ($hora >= 12 && $hora < 18) {
        $saludo = "¡Buenas tardes!";
        $mensaje = "Gracias por continuar con nosotros durante el día. Puedes revisar el estado de tus gestiones o agendar una nueva cita según tu conveniencia.";
    } else {
        $saludo = "¡Buenas noches!";
        $mensaje = "Antes de finalizar tu jornada, aprovecha para organizar tus próximas citas o revisar el seguimiento de tus solicitudes pendientes. ¡Tu comodidad es nuestra prioridad!";
    }
    ?>

    <!-- Sidebar del cliente -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/Self-Management/app/views/shared/sidebar_client.php'; ?>

    <main>
        <div class="container">
            <div class="welcome-container">
                <div class="welcome-content">
                    <h1><?php echo $saludo; ?> Bienvenido al Dashboard</h1>
                    <p><?php echo $mensaje; ?></p>
                    <button type="button" class="button button1" data-bs-toggle="modal" data-bs-target="#formModal">
                        Agendar una cita
                    </button>
                </div>
                <div class="welcome-image">
                    <img src="/Self-Management/public/images/render1.png" alt="Dashboard Image">
                </div>
            </div>
        </div>
    </main>
</body>

</html>
