<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehiculos registrados</title>
    <!-- Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!-- Para gráficas -->
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
        <div class="text-content">
            <h2>Vehiculos registrados</h2>
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
                        <th>Placa Vehículo</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Año</th>
                        <th>Tipo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>ABC123</td>
                        <td>Toyota</td>
                        <td>Corolla</td>
                        <td>2020</td>
                        <td>Automovil</td>
                        <td>
                            <button class="action-button edit">Agendar cita</button>
                            <button class="action-button edit">Editar</button>
                            <button class="action-button delete">Eliminar</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            </td>
        </div>
    </main>
</body>

</html>