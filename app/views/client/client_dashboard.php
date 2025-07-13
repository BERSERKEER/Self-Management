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
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/Self-Management/app/views/shared/sidebar_client.php'; ?>
    <main>
        <!-- Cards -->
        <div class="stats-cards separator">
            <!-- Card:1 -->
            <div class="stat-card active">
                <div class="stat-info">
                    <p>Proximas citas</p>
                    <h3>10 de mayo, 15:30h</h3>
                    <p>Servicio: Cambio de aceite</p>
                </div>
                <a href="#" class="button-box">
                    <img src="/Self-Management/public/images/icon/icon_groups.svg" alt="Usuarios">
                </a>
            </div>

            <!-- Card:2 -->
            <div class="stat-card active">
                <div class="stat-info">
                    <p>Citas</p>
                    <h3>2</h3>
                    <p>Pendientes</p>
                </div>
                <a href="#" class="button-box">
                    <img src="/Self-Management/public/images/icon/icon-person.svg" alt="Más vendidos" class="iconbox">
                </a>
            </div>

            <!-- Card:3 -->
            <div class="stat-card active">
                <div class="stat-info">
                    <p>Historial de servicios</p>
                    <h3>2</h3>
                    <p>visitas este año</p>
                </div>
                <a href="#" class="button-box">
                    <img src="/Self-Management/public/images/icon/icon_money.svg" alt="Ventas" class="iconbox">
                </a>
            </div>
        </div>

        <div class="container">
            <h3>Actividad Reciente</h3>
            <table class="user-table">
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Tecnico</th>
                        <th>Vehiculo</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>05/05/2025</td>
                        <td>admin01</td>
                        <td>admin01</td>
                        <td>Actualizó stock de productos</td>
                    </tr>
                    <tr>
                        <td>05/05/2025</td>
                        <td>userX</td>
                        <td>userX</td>
                        <td>Registró nueva venta</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Charts -->
        <div class="separator">
            <div class="container">
                <h3>Servicios más solicitados</h3>
                <p>Consulta el historial de citas y servicios realizados.</p>
                <canvas id="mostRequestedServicesChart"></canvas>
            </div>

            <div class="separator">
                <div class="container">
                    <h3>Notificaciones</h3>
                    <p>Recibe alertas y recordatorios sobre tus citas, servicios y novedades.</p>
                    <p>Recordatorio: Tu cita está programada para el 10 de mayo a las 15:30h.</p>
                    <button class="btn btn-primary">Ver detalles</button>
                </div>
            </div>
        </div>
    </main>

    <script>
        // Datos para la gráfica
        const ctx = document.getElementById('mostRequestedServicesChart').getContext('2d');
        const mostRequestedServicesChart = new Chart(ctx, {
            type: 'bar', // Tipo de gráfica
            data: {
                labels: ['Cambio de aceite', 'Revisión general', 'Alineación', 'Frenos'], // Etiquetas
                datasets: [{
                    label: 'Servicios más solicitados',
                    data: [10, 7, 5, 3], // Datos de ejemplo
                    backgroundColor: [
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(255, 99, 132, 0.2)'
                    ],
                    borderColor: [
                        'rgba(75, 192, 192, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
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