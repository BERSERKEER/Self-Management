<!--Inicia session ven base al rol-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <!-- Libraries -->
    <!-- CSS Styles -->
    <link rel="stylesheet" href="/Self-Management/public/css/login_style.css">
    <link rel="stylesheet" href="/Self-Management/public/css/normalize.css">
    <!-- Favicon/images -->
    <link id="favicon" rel="icon" type="image/png" href="/Self-Management/public/images/short_lg-dark.png">
    <!-- JS Scripts -->
    <script src="/Self-Management/public/js/icon-theme.js"></script>
</head>

<body>
    <!--Funcion: texto en base a zona horaria-->
    <?php
    date_default_timezone_set('America/Bogota');
    $hora = date('H');

    if ($hora >= 5 && $hora < 12) {
        $saludo = "Buenos días, Usuario";
        $mensaje = "Un nuevo día para liderar y optimizar la gestión del sistema.";
    } elseif ($hora >= 12 && $hora < 18) {
        $saludo = "Buenas tardes, Usuario";
        $mensaje = "Sigue supervisando y asegurando el buen funcionamiento de la plataforma.";
    } else {
        $saludo = "Buenas noches, Usuario";
        $mensaje = "Antes de cerrar el día, revisa los últimos detalles para un mejor control.";
    }
    ?>

    <!--Include componenet: Sidebar -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/Self-Management/app/views/shared/sidebar_client.php'; ?>
    <main>
        <div class="container">
            <div class="welcome-container">
                <div class="welcome-content">
                    <h1>Bienvenido al Dashboard</h1>
                    <p><?php echo $mensaje; ?></p>
                    <button type="button" class="button button1" data-bs-toggle="modal" data-bs-target="#formModal">Agendar cita
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