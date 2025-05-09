<?php
$error = $_GET['error'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Recuperar Contraseña</title>
	<!-- CSS Styles -->
	<link rel="stylesheet" href="/FastFixScheduler/public/css/login_style.css">
	<link rel="stylesheet" href="/FastFixScheduler/public/css/normalize.css">
	<!-- Favicon -->
	<link id="favicon" rel="icon" type="image/png" href="/FastFixScheduler/public/images/short_lg-dark.png">
	<!-- JS Scripts -->
	<script src="/FastFixScheduler/public/js/icon-theme.js"></script>
	<!-- Libreries -->
	<!-- SweetAlert2 -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
	<main class="auth-container" id="forgot-password">
		<div class="logo-container">
			<img src="/FastFixScheduler/public/images/large_lg-light.png" alt="Logo">
		</div>

		<?php if ($error): ?>
			<p style="color:red;"><?php echo htmlspecialchars($error); ?></p>
		<?php endif; ?>

		<form action="/FastFixScheduler/app/controllers/authController.php?action=forgot_password" method="POST">
			<h2>Recuperar Contraseña</h2>
			<div class="form-field">
				<input class="form-input" type="email" id="correo" name="correo" required placeholder=" ">
				<label class="input-label" for="correo">Correo electrónico</label>
			</div>
			<button type="submit" class="btn btn-primary">Enviar</button>
		</form>
	</main>
</body>

</html>