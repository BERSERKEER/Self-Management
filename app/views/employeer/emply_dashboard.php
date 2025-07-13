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
        <h1>Dashboard</h1>
        <p>Bienvenido a tu panel de control</p>
      </div>
      <div class="content">
        <div class="separator">
          <div class="stat-card active">
            <div class="stat-info">
              <p>Servicios</p>
              <h3>3</h3>
              <p>Asignados</p>
            </div>
            <a href="#" class="button-box">
              <img src="/Self-Management/public/images/icon/icon_groups.svg" alt="Usuarios">
            </a>
          </div>

          <!-- Card:2 -->
          <div class="stat-card active">
            <div class="stat-info">
              <p>En progreso</p>
              <h3>1</h3>
              <p>Completados</p>
            </div>
            <a href="#" class="button-box">
              <img src="/Self-Management/public/images/icon/icon-person.svg" alt="Más vendidos" class="iconbox">
            </a>
          </div>

          <!-- Card:3 -->
          <div class="stat-card active">
            <div class="stat-info">
              <p>En Finalizados</p>
              <h3>21</h3>
              <p>Esta semana</p>
            </div>
            <a href="#" class="button-box">
              <img src="/Self-Management/public/images/icon/icon_money.svg" alt="Ventas" class="iconbox">
            </a>
          </div>
        </div>

        <!-- Cards reported  -->
        <div class="stats-cards separator">
          <!-- Card:1 -->
          <div class="stat-card active">
            <div class="stat-info">
              <h1>Citas del dia</h1>
              <p>110:00 - Cambio de aceite (Toyota Corolla)</p>
              <h3>10:00</h3>
              <p>10:00 - Cambio de aceite (Toyota Corolla)</p>
              <small>Agendado para 09/05/2025 a las 2:00 PM</small>
            </div>
            <a href="#" class="button-box">
              <img src="/Self-Management/public/images/icon/icon_groups.svg" alt="Usuarios">
            </a>
          </div>

          <!-- Card:2 -->
          <div class="stat-card active">
            <div class="stat-info">
              <h1>Citas del dia</h1>
              <p>110:00 - Cambio de aceite (Toyota Corolla)</p>
              <h3>10:00</h3>
              <p>10:00 - Cambio de aceite (Toyota Corolla)</p>
              <small>Agendado para 09/05/2025 a las 2:00 PM</small>
            </div>
            <a href="#" class="button-box">
              <img src="/Self-Management/public/images/icon/icon_groups.svg" alt="Usuarios">
            </a>
          </div>

          <!-- Card:3 -->
          <div class="stat-card active">
            <div class="stat-info">
              <h1>Citas del dia</h1>
              <p>110:00 - Cambio de aceite (Toyota Corolla)</p>
              <h3>10:00</h3>
              <p>10:00 - Cambio de aceite (Toyota Corolla)</p>
              <small>Agendado para 09/05/2025 a las 2:00 PM</small>
            </div>
            <a href="#" class="button-box">
              <img src="/Self-Management/public/images/icon/icon_groups.svg" alt="Usuarios">
            </a>
          </div>
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