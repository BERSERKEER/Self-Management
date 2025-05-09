<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de clientes</title>
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
            <h2>Historial de servicios</h2>
            <div class="button-container">
                <button type="button" class="button button1" data-bs-toggle="modal" data-bs-target="#formModal">Agendar cita
                </button>
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
                        <th>Vehiculo</th>
                        <th>Servicio</th>
                        <th>Tecnico</th>
                        <th>Estado</th>
                        <th>Costo</th>
                        <th>Observaciones</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#002</td>
                        <td>Maria López</td>
                        <td>$200.00</td>
                        <td>$200.00</td>
                        <td>$200.00</td>
                        <td>Finalizado</td>
                        <td>Compra de repuesto</td>
                        <td><span class="status pending">Comprobante</span></td>
                        <!-- reagendar en caso del estado del servicios
                         descargar el comprovante #002
                         descagar factura del servicios 
                         Subir el comprovnte si el pago fue manual-->
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="separator">
           
            <div class="container">
            <h2>Tabla de facturación</h2>
            <table class="user-table">
                <thead>
                    <tr>
                        <th># Factura</th>
                        <th>Fecha</th>
                        <th>Vehículo</th>
                        <th>Servicio</th>
                        <th>Total (COP)</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                        <th>Subir comprobante</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#001</td>
                        <td>2023-05-01</td>
                        <td>Chevrolet Spark</td>
                        <td>Cambio de aceite</td>
                        <td>$150,000</td>
                        <td>Finalizado</td>
                        <td>
                            <button class="btn btn-primary btn-sm">Descargar factura</button>
                        </td>
                        <td>
                            <button class="btn btn-secondary btn-sm">Subir comprobante</button>
                        </td>
                    </tr>
                    <tr>
                        <td>#002</td>
                        <td>2023-05-03</td>
                        <td>Renault Logan</td>
                        <td>Revisión de frenos</td>
                        <td>$200,000</td>
                        <td>Pendiente</td>
                        <td>
                            <button class="btn btn-primary btn-sm">Reagendar</button>
                        </td>
                        <td>
                            <button class="btn btn-secondary btn-sm">Subir comprobante</button>
                        </td>
                    </tr>
                    <tr>
                        <td>#003</td>
                        <td>2023-05-05</td>
                        <td>Ford Fiesta</td>
                        <td>Diagnóstico de motor</td>
                        <td>$300,000</td>
                        <td>En proceso</td>
                        <td>
                            <button class="btn btn-primary btn-sm">Descargar comprobante</button>
                        </td>
                        <td>
                            <button class="btn btn-secondary btn-sm">Subir comprobante</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- Reagendar en caso del estado del servicio
                 Descargar el comprobante #002
                 Descargar factura del servicio
                 Subir el comprobante si el pago fue manual -->
        </div>

    </main>
</body>
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

</html>