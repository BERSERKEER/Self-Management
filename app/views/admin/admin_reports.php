<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Historial de servicios</title>
  <!-- Libraries -->
  <!-- CSS Styles -->
  <link rel="stylesheet" href="/Self-Management/public/css/style.css">
  <link rel="stylesheet" href="/Self-Management/public/css/normalize.css">
  <!-- Favicon/images -->
  <link id="favicon" rel="icon" type="image/png" href="/Self-Management/public/images/short_lg-dark.png">
  <!-- JS Scripts -->
  <script src="/Self-Management/public/js/icon-theme.js"></script>
</head>

<body>
  <!-- Include component: Sidebar -->
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/Self-Management/app/views/shared/sidebar_admin.php'; ?>

  <main>
    <!-- Header Section -->
    <div class="text-content">
      <h2>Reportes</h2>
      <div class="button-container">
        </button>
      </div>
    </div>


    <div class="container">
      <div class="search-filter-container">
        <input type="text" id="search-bar" placeholder="Buscar..." />
        <!-- Filter: Otros -->
        <select id="sort-filter">
          <option value="recientes">Todos</option>
          <option value="populares">Pendientes</option>
          <option value="mayor-precio">En proceso</option>
          <option value="menor-precio">Finalizada</option>
        </select>
      </div>

      <table class="user-table">
        <thead>
          <tr>
            <th>Fecha</th>
            <th>Cliente</th>
            <th>Servicio</th>
            <th>Técnico</th>
            <th>Estado</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>2025-05-02</td>
            <td>Laura García</td>
            <td>Diagnóstico general</td>
            <td>Juan Ramírez</td>
            <td>Completado</td>
          </tr>
          <!-- Más filas... -->
        </tbody>
      </table>

      <div class="export-buttons">
        <button type="button" class="button button1" data-bs-toggle="modal" data-bs-target="#formModal">📊 Exportar Excel
        </button>
        <button type="button" class="button button1" data-bs-toggle="modal" data-bs-target="#formModal">📄 Exportar PDF
        </button>
      </div>

      <div class="stats">
        <h3>Estadísticas (Placeholder)</h3>
        <div class="chart-placeholder">
          📈 Aquí irán los gráficos (servicios por mes, ingresos, técnicos más activos, etc.)
        </div>
      </div>
    </div>



    <h3>Historial de servicios</h3>
    <div class="container">
      <table class="user-table">
        <thead>
          <tr>
            <th>Cliente</th>
            <th>Vehiculo</th>
            <th>Servicio</th>
            <th>Fecha</th>
            <th>Estado</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>#002</td>
            <td>Maria López</td>
            ptd><span class="status pending">Pendiente</span></td>
            <td>$200.00</td>
            <td>Finalizado</td>
          </tr>
        </tbody>
      </table>
    </div>
  </main>
</body>

</html>