<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de citas</title>
    <!-- Libraries -->
    <!-- Bootstrap 5 JS y CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/Self-Management/app/views/shared/sidebar_admin.php'; ?>
    <main>
        <div class="text-content">
            <h2>Gestion de citas</h2>
            <div class="button-container">
                <button type="button" class="button button1" data-bs-toggle="modal" data-bs-target="#formModal">Agregar cita
                </button>
            </div>
        </div>

        <!-- Modal con formulario -->
        <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-custom">
                <div class="modal-content">
                    <form id="popupForm">
                        <div class="modal-header">
                            <h5 class="modal-title" id="formModalLabel">Formulario de Servicio</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Cliente</label>
                                <input type="text" class="form-control" id="nombre" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Tecnico</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Vehiculo</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Servicio</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Fecha</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Hora</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Estado</label>
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

        <!-- Modal Ver Detalles -->
        <div class="modal fade" id="detalleModal" tabindex="-1" aria-labelledby="detalleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-custom">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="detalleModalLabel">Detalles de la Cita</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body">
                        <p><strong>Cliente:</strong> Juan Pérez</p>
                        <p><strong>Teléfono:</strong> 555-1234</p>
                        <p><strong>Correo:</strong> juan@example.com</p>
                        <p><strong>Vehículo:</strong> Toyota Corolla 2019</p>
                        <p><strong>Placa:</strong> XYZ-123</p>
                        <p><strong>Fecha:</strong> 2025-05-10</p>
                        <p><strong>Hora:</strong> 10:30</p>
                        <p><strong>Estado:</strong> Pendiente</p>
                        <p><strong>Servicios:</strong> Cambio de aceite, revisión general</p>
                        <p><strong>Observaciones:</strong> Cliente solicita revisión extra de frenos.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" onclick="alert('Ver historial cliente')">Historial cliente</button>
                        <button type="button" class="btn btn-primary" onclick="alert('Ver historial vehículo')">Historial vehículo</button>
                    </div>
                </div>
            </div>
        </div>

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
            <!-- Tabla de citas -->
            <table class="user-table">
                <thead>
                    <tr>
                        <th>Cliente</th>
                        <th>Vehiculo</th>
                        <th>Tecnico</th>
                        <th>Servicio</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            Toyota Corolla 2019<br>
                            <a href="#" class="history-link">Ver historial vehículo</a>
                        </td>
                        <td>
                            Toyota Corolla 2019<br>
                            <a href="#" class="history-link">Ver historial vehículo</a>
                        </td>
                        <td>$200.00</td>
                        <td>Finalizado</td>
                        <td>Finalizado</td>
                        <td>Finalizado</td>
                        <td>Finalizado</td>
                        <td>
                            <button class="btn btn-primary btn-sm">Editar</button>
                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#detalleModal">Ver detalles</button>
                            <button class="btn btn-danger btn-sm">Cancelar</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
    <!-- JS para manejar el envío del formulario -->
    <script>
        document.getElementById('popupForm').addEventListener('submit', function(e) {
            e.preventDefault();
            // Aquí puedes procesar los datos del formulario
            alert('Formulario enviado');
            const modal = bootstrap.Modal.getInstance(document.getElementById('formModal'));
            modal.hide(); // Cierra el modal después de enviar
        });
    </script>
    <!-- JS para manejar el modal de detalles -->
    <script>
        function verDetalles() {
            document.getElementById('detalleModal').style.display = 'block';
        }

        function cerrarModal() {
            document.getElementById('detalleModal').style.display = 'none';
        }

        // También permite cerrar haciendo clic fuera del modal
        window.onclick = function(event) {
            const modal = document.getElementById('detalleModal');
            if (event.target === modal) cerrarModal();
        };
    </script>
</body>

</html>

<!-- Reasignar el mecanico -->