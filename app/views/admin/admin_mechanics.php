<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de tecnicos</title>
    <!-- Libraries -->
    <!-- Bootstrap 5 JS y CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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
            <h2>Gestión de Técnicos</h2>
            <div class="button-container">
                <button type="button" class="button button1" data-bs-toggle="modal" data-bs-target="#formModal">Agregar tecnico
                </button>
            </div>
        </div>

        <!-- Modal con formulario -->
        <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-custom">
                <div class="modal-content">
                    <form id="popupForm">
                        <div class="modal-header">
                            <h5 class="modal-title" id="formModalLabel">Formulario de tecnico</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Id</label>
                                <input type="text" class="form-control" id="nombre" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Nombre</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Especialidad</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Dispoblidad</label>
                                <input type="email" class="form-control" id="email" required>
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
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Especialidad</th>
                        <th>Disponibilidad</th>
                        <th>Cliente Asignado</th>
                        <th>Servicio Actual</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#003</td>
                        <td>Carlos Gómez</td>
                        <td>Plomería</td>
                        <td>Disponible</td>
                        <td>Cliente C</td>
                        <td>Mantenimiento de tuberías</td>
                        <td>
                            <button class="btn btn-primary btn-sm">Reasignar</button>
                            <button class="btn btn-warning btn-sm">Editar</button>
                            <button class="btn btn-danger btn-sm">Cancelar</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
    <!-- JS para el formulario del modal -->
    <script>
        document.getElementById('popupForm').addEventListener('submit', function(e) {
            e.preventDefault();
            // Aquí puedes procesar los datos del formulario
            alert('Formulario enviado');
            const modal = bootstrap.Modal.getInstance(document.getElementById('formModal'));
            modal.hide(); // Cierra el modal después de enviar
        });
    </script>
</body>

</html>


<!-- Include componenet: Footer 
 Form para agregar tectnico
 Nombre: name
 Escialidades: electricos electricos
 Dispoblidad: horion-->


<!-- Reasignar el mecanico 
  mediante un modal al prulsar el boton me muetra al cleinte al que es reasinado-->