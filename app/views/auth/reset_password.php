<?php
$token = $_GET['token'] ?? '';
$error = $_GET['error'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Restablecer contraseña</title>
	<link rel="stylesheet" href="/FastFixScheduler/public/css/login_style.css">
	<link rel="stylesheet" href="/FastFixScheduler/public/css/normalize.css">
</head>

<body>
	<main class="auth-container" id="reset-password">
		<div class="logo-container">
			<img src="/FastFixScheduler/public/images/large_lg-light.png" alt="Logo" />
		</div>

		<?php if ($error): ?>
			<p style="color:red;"><?php echo htmlspecialchars($error); ?></p>
		<?php endif; ?>

		<form action="/FastFixScheduler/app/controllers/authController.php?action=reset_password" method="POST">
			<input type="hidden" name="token" value="<?php echo htmlspecialchars($token); ?>">

			<div class="form-field">
				<input class="form-input" type="password" id="password" name="password" required placeholder=" ">
				<label class="input-label" for="password">Nueva contraseña</label>
			</div>

			<div class="form-field">
				<input class="form-input" type="password" id="confirm_password" name="confirm_password" required placeholder=" ">
				<label class="input-label" for="confirm_password">Confirmar nueva contraseña</label>
			</div>

			<button type="submit" class="btn btn-primary">Restablecer contraseña</button>
		</form>
	</main>
</body>

</html>