<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Inicio</title>
  <!-- Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!-- Para gráficas -->
  <!-- CSS Styles -->
  <link rel="stylesheet" href="/Self-Management/public/css/style.css">
  <link rel="stylesheet" href="/Self-Management/public/css/normalize.css">
  <!-- Favicon/images -->
  <link id="favicon" rel="icon" type="image/png" href="/Self-Management/public/images/short_lg-dark.png">
  <!-- JS Scripts -->
  <script src="/Self-Management/public/js/icon-theme.js"></script>
</head>

<body>
  <!--Include componenet: Sidebar -->
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/Self-Management/app/views/shared/sidebar_employ.php'; ?>
  <main>
    <div class="container">
      <div class="header">
        <h1>Servicios asignados</h1>
        <p>Bienvenido a tu panel de control</p>
      </div>

      <div class="separator">
            <div class="container">
                <h3>Servicios del dia</h3>
                <table class="user-table">
                    <thead>
                        <tr>
                            <th>Hora</th>
                            <th>Servicio</th>
                            <th>Vehiculo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>05/05/2025</td>
                            <td>admin01</td>
                            <td>Actualizó stock de productos</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </main>
</body>

</html>