<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Historial de servicios</title>
  <!-- Libraries -->
  <!-- Bootstrap 5 JS y CSS -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
        </tbody>
      </table>

      <div class="export-buttons">
        <button type="button" class="button button1" data-bs-toggle="modal" data-bs-target="#formModal">📊 Exportar Excel
        </button>
        <button type="button" class="button button1" data-bs-toggle="modal" data-bs-target="#formModal">📄 Exportar PDF
        </button>
      </div>

      <div class="stats">
        <h3>Estadísticas</h3>
        <div class="chart-container">
          <canvas id="servicesChart"></canvas>
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
  
  <script>
    const ctx = document.getElementById('servicesChart').getContext('2d');
    const servicesChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
        datasets: [{
          label: 'Servicios por mes',
          data: [12, 19, 3, 5, 2],
          backgroundColor: [
            'rgba(75, 192, 192, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 99, 132, 0.2)'
          ],
          borderColor: [
            'rgba(75, 192, 192, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 99, 132, 1)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>
</body>

</html>