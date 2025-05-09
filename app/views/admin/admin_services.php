<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de servicios</title>

    <!-- Bootstrap 5 JS y CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- CSS Styles -->
    <link rel="stylesheet" href="/Self-Management/public/css/styles.css">
    <link rel="stylesheet" href="/Self-Management/public/css/normalize.css">

    <!-- Favicon -->
    <link id="favicon" rel="icon" type="image/png" href="/Self-Management/public/images/short_lg-dark.png">

    <!-- Custom JS -->
    <script src="/Self-Management/public/js/icon-theme.js"></script>
</head>

<body>
    <!-- Sidebar component -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/Self-Management/app/views/shared/sidebar_admin.php'; ?>

    <main>
        <div class="text-content">
            <h2>Gestión de servicios</h2>
            <div class="button-container">
                <button type="button" class="button button1" data-bs-toggle="modal" data-bs-target="#formModal">
                    Crear nuevo servicio
                </button>
                <button type="button" class="button button1" data-bs-toggle="modal" data-bs-target="#formModal">
                    Asignar servicio pendientes
                </button>
            </div>
        </div>

        <!-- Modal: Nuevo servicio -->
        <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-custom">
                <div class="modal-content">
                    <form id="popupForm">
                        <div class="modal-header">
                            <h5 class="modal-title" id="formModalLabel">Nuevo servicio</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre del servicio</label>
                                <input type="text" class="form-control" id="nombre" required>
                            </div>
                            <div class="mb-3">
                                <label for="comentario" class="form-label">Descripción</label>
                                <textarea id="comentario" name="comentario" rows="3" class="form-control" placeholder="Ej: Quiero revisar un ruido al frenar."></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="duracion" class="form-label">Duración (ej: 30 min, 1 h)</label>
                                <input type="text" class="form-control" id="duracion" required>
                            </div>
                            <div class="mb-3">
                                <label for="precio" class="form-label">Precio ($)</label>
                                <input type="number" class="form-control" id="precio" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Crear</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Filtro y tabla -->
        <div class="container">
            <div class="search-filter-container">
                <input type="text" id="search-bar" placeholder="Buscar cliente..." />
                <!-- Filter: Otros -->
                <select id="sort-filter">
                    <option value="recientes">Todos</option>
                    <option value="populares">Pendientes</option>
                    <option value="mayor-precio">En proceso</option>
                    <option value="menor-precio">Finalizada</option>
                </select>
            </div>

            <table class="user-table">
                <thead class="table-light">
                    <tr>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Duración</th>
                        <th>Precio</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Maria López</td>
                        <td>Revisión de frenos</td>
                        <td>30 min</td>
                        <td>$20</td>
                        <td>
                            <button class="btn btn-warning btn-sm">Editar</button>
                            <button class="btn btn-danger btn-sm">Eliminar</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="separator">
            <div class="container">
                <h4>Servicios pendientes</h4>
                <p>Estos son los servicios pendientes de asignar a un técnico.</p>
                <div class="asignacion">
                    <label for="cita">Cita pendiente:</label>
                    <select id="cita">
                        <option value="1">Cita #1 - 10/05/2025 - 09:00 AM</option>
                        <option value="2">Cita #2 - 10/05/2025 - 10:00 AM</option>
                    </select>

                    <label for="mecanico">Mecánico:</label>
                    <select id="mecanico">
                        <option value="1">Juan Pérez</option>
                        <option value="2">Luis Gómez</option>
                    </select>

                    <button class="button button1">Asignar</button>
                </div>
            </div>
        </div>
    </main>
</body>

</html>