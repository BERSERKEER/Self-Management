<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configuración del Taller</title>
    <!-- Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!-- Para gráficas -->
    <!-- CSS Styles -->
    <link rel="stylesheet" href="/Self-Management/public/css/styles.css">
    <link rel="stylesheet" href="/Self-Management/public/css/normalize.css">
    <!-- Favicon/images -->
    <link id="favicon" rel="icon" type="image/png" href="/Self-Management/public/images/short_lg-dark.png">
    <!-- JS Scripts -->
    <script src="/Self-Management/public/js/icon-theme.js"></script>
</head>

<body>
    <!--Include component: Sidebar -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/Self-Management/app/views/shared/sidebar_admin.php'; ?>
    <main>
        <h3>Configuración del Taller</h3>
        <div class="separator">
            <div class="container">
                <h3>Información del Taller</h3>
                <label for="nombre-taller">Nombre del Taller</label>
                <input type="text" id="nombre-taller" placeholder="Nombre del taller mecánico">

                <label for="direccion-taller">Dirección</label>
                <input type="text" id="direccion-taller" placeholder="Dirección completa del taller">

                <label for="telefono-taller">Teléfono de Contacto</label>
                <input type="tel" id="telefono-taller" placeholder="+34 600 000 000">

                <label for="email-taller">Correo Electrónico</label>
                <input type="email" id="email-taller" placeholder="correo@taller.com">
            </div>
        </div>

        <div class="separator">
            <h3>Horarios de Atención</h3>
            <div class="container">
                <label for="horario-apertura">Horario de Apertura</label>
                <input type="time" id="horario-apertura">

                <label for="horario-cierre">Horario de Cierre</label>
                <input type="time" id="horario-cierre">

                <label for="dias-atencion">Días de Atención</label>
                <select id="dias-atencion" multiple>
                    <option value="lunes">Lunes</option>
                    <option value="martes">Martes</option>
                    <option value="miercoles">Miércoles</option>
                    <option value="jueves">Jueves</option>
                    <option value="viernes">Viernes</option>
                    <option value="sabado">Sábado</option>
                    <option value="domingo">Domingo</option>
                </select>
            </div>
        </div>

        <div class="separator">
            <h3>Servicios Ofrecidos</h3>
            <div class="container">
                <label for="servicios">Lista de Servicios</label>
                <textarea id="servicios" placeholder="Ejemplo: Cambio de aceite, alineación, revisión general"></textarea>
            </div>
        </div>

        <div class="separator">
            <h3>Notificaciones</h3>
            <div class="container">
                <label for="notificaciones">Método de Notificación</label>
                <select id="notificaciones">
                    <option value="email">Correo Electrónico</option>
                    <option value="telefono">Llamada Telefónica</option>
                    <option value="whatsapp">WhatsApp</option>
                </select>

                <div class="checkbox-group">
                    <input type="checkbox" id="notif-citas" checked>
                    <label for="notif-citas">Recordatorios de Citas</label><br>

                    <input type="checkbox" id="notif-promos">
                    <label for="notif-promos">Promociones y Ofertas</label>
                </div>
            </div>
        </div>

        <div class="separator">
            <div class="container">
                <button class="button success" id="guardar-cambios">Guardar Cambios</button>
                <button class="button cancel" id="cancelar-cambios">Cancelar</button>
            </div>
        </div>
    </main>
</body>

</html>