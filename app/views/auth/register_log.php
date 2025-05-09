<!DOCTYPE html>
<html lang="es">

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
        <h2>Crear cuenta</h2>
        <form action="" method="POST">
            <input type="hidden" name="action" value="login">

            <div class="form-field">
                <input class="form-input" type="name" id="name" name="name" required placeholder=" ">
                <label class="input-label" for="name">Nombres completos</label>
            </div>

            <div class="form-field">
                <input class="form-input" type="name" id="name" name="name" required placeholder=" ">
                <label class="input-label" for="name">Apellidos completos</label>
            </div>

            <div class="form-field">
                <input class="form-input" type="email" id="email" name="email" required placeholder=" ">
                <label class="input-label" for="email">Correo electronico</label>
            </div>

            <div class="form-field">
                <input type="password" class="form-input" id="password" name="password" required placeholder=" ">
                <label class="input-label" for="password">Contraseña</label>
            </div>

            <div class="form-field">
                <input type="checkbox" id="terms" name="terms" required>
                <label for="terms">Acepto los <a href="/Self-Management/app/views/auth/terms_conditions.php" target="_blank">términos y condiciones</a></label>
            </div>

            <button type="submit" class="btn btn-primary">Crear</button>
        </form>
    </main>
</body>

</html>