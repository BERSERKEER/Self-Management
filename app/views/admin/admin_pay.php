<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facturacion y pagos</title>
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
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/Self-Management/app/views/shared/sidebar_admin.php'; ?>
    <main>
        <div class="text-content">
            <h2>Facturacion y pagos</h2>
        </div>

        <div class="container">
            <div class="search-filter-container">
                <input type="text" id="search-bar" placeholder="Buscar cliente o factura..." />
                <!-- Filter: Otros -->
                <select id="sort-filter">
                    <option value="recientes">Todos</option>
                    <option value="populares">Pagado</option>
                    <option value="mayor-precio">Pendiente</option>
                </select>
            </div>
            <table class="user-table">
                <thead>
                    <tr>
                        <th># Factura</th>
                        <th>Cliente</th>
                        <th>Fecha</th>
                        <th>Valor</th>
                        <th>Estado</th>
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
                        <td>
                            <button class="btn btn-primary btn-sm">Ver</button>
                            <button class="btn btn-secondary btn-sm">PDF</button>
                            <button class="btn btn-secondary btn-sm">Validar</button>
                        </td>
                        <!-- reagendar en caso del estado del servicios
                         descargar el comprovante #002
                         descagar factura del servicios 
                         Subir el comprovnte si el pago fue manual-->
                    </tr>
                </tbody>
            </table>
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