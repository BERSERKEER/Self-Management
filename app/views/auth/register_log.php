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
        <form action="/Self-Management/register.php" method="POST">
            <input type="hidden" name="action" value="register">

            <div class="form-field">
                <input class="form-input" type="text" id="nombre" name="nombre" required placeholder=" ">
                <label class="input-label" for="nombre">Nombres completos</label>
            </div>

            <div class="form-field">
                <input class="form-input" type="tel" id="telefono" name="telefono" required placeholder=" ">
                <label class="input-label" for="telefono">Teléfono</label>
            </div>

            <div class="form-field">
                <input class="form-input" type="email" id="correo" name="correo" required placeholder=" ">
                <label class="input-label" for="correo">Correo electrónico</label>
            </div>

            <div class="form-field">
                <input type="password" class="form-input" id="password" name="password" required placeholder=" ">
                <label class="input-label" for="password">Contraseña</label>
            </div>
            
            <?php if (isset($_SESSION['error'])): ?>
                <div class="alert alert-danger">
                    <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
                </div>
            <?php endif; ?>

            <button type="submit" class="btn btn-primary">Crear cuenta</button>
        </form>
    </main>
</body>

</html>