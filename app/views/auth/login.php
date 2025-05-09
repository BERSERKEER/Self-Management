<?php
// require_once __DIR__ . '/../../../config/database.php';
// require_once __DIR__ . '/../../controllers/authController.php';

// $controller = new AuthController($pdo);
// $controller->autenticación();

// //Valida y redirije segun el rol
// if (isset($_SESSION["user"])) {
//     $rol = $_SESSION["user"]["rol"];

//     if ($rol == 1) {
//         header("Location: /Self-Managementapp/views/admin/admin_home_page.php");
//     } elseif ($rol == 2) {
//         header("Location: /Self-Managementapp/views/employ/employ_home_page.php");
//     } else {
//         header("Location: /Self-Managementapp/views/auth/login.php");
//     }
//     exit();
// }

// Validación de errores
// $error = $_SESSION["error"] ?? "";
// unset($_SESSION["error"]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <!-- CSS Styles -->
    <link rel="stylesheet" href="/Self-Management/public/css/login_style.css">
    <link rel="stylesheet" href="/Self-Management/public/css/normalize.css">
    <!-- Favicon/images -->
    <link id="favicon" rel="icon" type="image/png" href="/Self-Management/public/images/short_lg-dark.png">
    <!-- JS Scripts -->
    <script src="/Self-Management/public/js/icon-theme.js"></script>
</head>

<body>
    <main class="auth-container" id="login">
        <div class="logo-container">
            <img src="/Self-Management/public/images/large_lg-light.png" alt="Logo" />
        </div>

        <form action="" method="POST">
            <input type="hidden" name="action" value="login">

            <div class="form-field">
                <input class="form-input" type="email" id="correo" name="correo" required placeholder=" ">
                <label class="input-label" for="correo">Correo electrónico</label>
            </div>

            <div class="form-field">
                <input type="password" class="form-input" id="password" name="password" required placeholder=" ">
                <label class="input-label" for="password">Contraseña</label>
            </div>
            <button type="submit" class="btn btn-primary">Ingresar</button>

            <div class="form-link">
                <p>¿No tienes cuenta?
                    <a href="/Self-Management/app/views/auth/register_log.php">Regístrate</a>
                </p>
                <a href="/Self-Management/app/views/client/client_home.php">Olvide contraseña</a>
            </div>
        </form>
    </main>
</body>

</html>