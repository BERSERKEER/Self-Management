<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Inicio</title>
    <!-- Libraries -->
    <!-- Para gráficas -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- CSS Styles -->
    <link rel="stylesheet" href="/Self-Management/public/css/login_style.css">
    <link rel="stylesheet" href="/Self-Management/public/css/normalize.css">
    <!-- Favicon/images -->
    <link id="favicon" rel="icon" type="image/png" href="/Self-Management/public/images/short_lg-dark.png">
    <!-- JS Scripts -->
    <script src="/Self-Management/public/js/icon-theme.js"></script>
</head>

<body>
    <!--Include componenet: Sidebar -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/Self-Management/app/views/shared/sidebar_admin.php'; ?>
    <main>
        <div class="container">
            <h2>Panel de adminstracion</h2>
            <p>Bienvenido al panel de control. Aquí puedes visualizar y gestionar los datos clave en tiempo real, monitorear el rendimiento y tomar decisiones informadas para optimizar la gestión.</p>

            <!-- Cards -->
            <div class="stats-cards separator">
                <!-- Card:1 -->
                <div class="stat-card active">
                    <div class="stat-info">
                        <p>Tecnicos</p>
                        <h3>150</h3>
                        <p>Disponibles</p>
                    </div>
                    <a href="#" class="button-box">
                        <img src="/Self-Management/public/images/icon/icon_groups.svg" alt="Usuarios">
                    </a>
                </div>

                <!-- Card:2 -->
                <div class="stat-card active">
                    <div class="stat-info">
                        <p>Citas</p>
                        <h3>25</h3>
                        <p>Pendientes</p>
                    </div>
                    <a href="#" class="button-box">
                        <img src="/Self-Management/public/images/icon/icon-person.svg" alt="Más vendidos" class="iconbox">
                    </a>
                </div>

                <!-- Card:3 -->
                <div class="stat-card active">
                    <div class="stat-info">
                        <p>Ingresos mensuales</p>
                        <h3>COP</h3>
                        <p>$1.000.000.00</p>
                    </div>
                    <a href="#" class="button-box">
                        <img src="/Self-Management/public/images/icon/icon_money.svg" alt="Ventas" class="iconbox">
                    </a>
                </div>


            </div>
            <!-- Gráfica -->
            <div class="container">
                <div class="chart-container">
                    <canvas id="appointmentsChart"></canvas>
                </div>
            </div>

            <!-- Cards -->
            <div class="separator">
                <h3>Flujos de Servicios</h3>
                <table class="user-table">
                    <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Ciente</th>
                            <th>Vehiculo</th>
                            <th>Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>05/05/2025</td>
                            <td>admin01</td>
                            <td>Toyota</td>
                            <td>Finalizado</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <script>
        const ctx = document.getElementById('appointmentsChart').getContext('2d');
        const appointmentsChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb', 'Dom'],
                datasets: [{
                    label: 'Citas por Día',
                    data: [5, 8, 6, 9, 7, 4, 3],
                    backgroundColor: 'rgba(245, 235, 235, 0.2)',
                    borderColor: '#3498db',
                    borderWidth: 2,
                    tension: 0.4,
                    fill: true
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