<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inicio de sesión</title>

    <!-- CSS Styles -->
    <link rel="stylesheet" href="/Self-Management/public/css/normalize.css" />
    <link rel="stylesheet" href="/Self-Management/public/css/login_style.css" />

    <!-- Favicon -->
    <link id="favicon" rel="icon" type="image/png" href="/Self-Management/public/images/short_lg-dark.png" />

    <!-- JS Scripts -->
    <script src="/Self-Management/public/js/icon-theme.js" defer></script>
</head>

<body>
    <main class="auth-container" id="login">

        <!-- Logo -->
        <div class="logo-container">
            <img src="/Self-Management/public/images/large_lg-light.png" alt="Logo" />
        </div>

        <!-- Formulario de inicio de sesión -->
        <form action="/Self-Management/index.php?controller=login&action=validar" method="POST">
            <div class="form-field">
                <input class="form-input" type="text" id="correo" name="correo" required placeholder=" " />
                <label class="input-label" for="correo">Correo electrónico</label>
            </div>

            <div class="form-field">
                <input class="form-input" type="password" id="password" name="password" required placeholder=" " />
                <label class="input-label" for="password">Contraseña</label>
            </div>

            <?php
            session_start();
            if (isset($_SESSION['error'])) {
                echo "<p style='color:red;'>" . $_SESSION['error'] . "</p>";
                unset($_SESSION['error']);
            }
            ?>

            <button type="submit" class="btn btn-primary">Ingresar</button>

            <div class="form-link">
                <p>
                    ¿No tienes cuenta?
                    <a href="/Self-Management/app/views/auth/register_log.php">Regístrate</a>
                </p>
                <a href="/Self-Management/app/views/auth/forgot_password.php">Olvidé contraseña</a>
            </div>
        </form>

    </main>
</body>

</html>