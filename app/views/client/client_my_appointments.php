<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Citas</title>
    <!-- Libraries -->
    <!-- Bootstrap 5 JS y CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- CSS Styles -->
    <link rel="stylesheet" href="/Self-Management/public/css/styles.css">
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
        <div class="text-content">
            <h2>Mis Citas Programadas</h2>
            <div class="button-container">
                <button type="button" class="button button1" data-bs-toggle="modal" data-bs-target="#formModal">Agendar cita
                </button>
                <button type="button" class="button button1" data-bs-toggle="modal" data-bs-target="#formVehicle">Agregar Vehiculo
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
        </div>

        <div class="separator">
            <div class="container">
                <div class="stat-card active">
                    <div class="stat-info">
                        <h1>Revisión de frenos</h1>
                        <p>Fecha: <strong>2025-05-08</strong></p>
                        <p>Hora: <strong>10:00 AM</strong></p>
                        <p>Estado: <strong>Pendiente</strong> </p>
                        <p>Vehiculo: <strong>Toyota Corolla 2020</strong> </p>
                        <p>Comentario: <strong>Quiero revisar un ruido al frenar.</strong> </p>
                        <button type="button" class="button button1" data-bs-toggle="modal" data-bs-target="#formModal">Ver Datalles</button>
                    </div>
                    <span class="badge">Finalizada</span>
                </div>

                <div class="separator">
                    <div class="stat-card active">
                        <div class="stat-info">
                            <h1>Revisión de frenos</h1>
                            <p>Fecha: <strong>2025-05-08</strong></p>
                            <p>Hora: <strong>10:00 AM</strong></p>
                            <p>Estado: <strong>Pendiente</strong> </p>
                            <p>Vehiculo: <strong>Toyota Corolla 2020</strong> </p>
                            <p>Comentario: <strong>Quiero revisar un ruido al frenar.</strong> </p>
                            <button type="button" class="button success" data-bs-toggle="modal" data-bs-target="#formModal">Reprogramar</button>
                            <button type="button" class="button cancel" data-bs-toggle="modal" data-bs-target="#formModal">Cancelar cita</button>
                        </div>
                        <span class="badge success">CONFIRMADA</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal con formulario -->
        <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-custom">
                <div class="modal-content">
                    <form id="popupForm">
                        <div class="modal-header">
                            <h5 class="modal-title" id="formModalLabel">Agendar una Cita</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="servicio">Servicio:</label>
                                <select id="servicio" name="servicio" required>
                                    <option value="">-- Selecciona un servicio --</option>
                                    <option value="aceite">Cambio de aceite - 30min</option>
                                    <option value="frenos">Revisión de frenos - 45min</option>
                                    <option value="motor">Diagnóstico de motor - 60min</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="servicio">Vehiculo:</label>
                                <select id="servicio" name="servicio" required>
                                    <option value="">-- Selecciona tu Vehiculo --</option>
                                    <option value="aceite">Cambio de aceite - 30min</option>
                                    <option value="frenos">Revisión de frenos - 45min</option>
                                    <option value="motor">Diagnóstico de motor - 60min</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="fecha">Fecha:</label>
                                <input type="date" id="fecha" name="fecha" required min="2025-05-08" />
                            </div>
                            <div class="mb-3">
                                <label for="hora">Hora:</label>
                                <input type="time" id="hora" name="hora" required />
                            </div>
                            <div class="mb-3">
                                <label for="comentario" class="form-label">Comentario adicional (opcional):</label>
                                <textarea id="comentario" name="comentario" rows="3" placeholder="Ej: Quiero revisar un ruido al frenar."></textarea>
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

        <!-- Modal con formulario [Vehiculo] -->
        <div class="modal fade" id="formVehicle" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-custom">
                <div class="modal-content">
                    <form id="popupForm">
                        <div class="modal-header">
                            <h5 class="modal-title" id="formModalLabel">Registrar Vehiculo  </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="servicio">Marca:</label>
                                <select id="servicio" name="servicio" required>
                                    <option value="">-- Selecciona la marca --</option>
                                    <option value="aceite">Cambio de aceite - 30min</option>
                                    <option value="frenos">Revisión de frenos - 45min</option>
                                    <option value="motor">Diagnóstico de motor - 60min</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Modelo</label>
                                <input type="text" class="form-control" id="nombre" required>
                            </div>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Año</label>
                                <input type="text" class="form-control" id="nombre" required>
                            </div>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Placa</label>
                                <input type="text" class="form-control" id="nombre" required>
                            </div>
                            <div class="mb-3">
                                <label for="servicio">Tipo de vehiculo:</label>
                                <select id="servicio" name="servicio" required>
                                    <option value="">-- Selecciona tu Vehiculo --</option>
                                    <option value="aceite">Cambio de aceite - 30min</option>
                                    <option value="frenos">Revisión de frenos - 45min</option>
                                    <option value="motor">Diagnóstico de motor - 60min</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Color</label>
                                <input type="text" class="form-control" id="nombre" required>
                            </div>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Kilometraje</label>
                                <input type="text" class="form-control" id="nombre" required>
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
    </main>
</body>

</html>