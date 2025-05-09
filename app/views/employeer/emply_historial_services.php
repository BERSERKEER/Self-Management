<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Historial de Servicios</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      background-color: #f9f9f9;
    }

    header {
      background-color: #007bff;
      color: white;
      text-align: center;
      padding: 1rem;
    }

    .container {
      max-width: 900px;
      margin: 2rem auto;
      padding: 2rem;
      background: white;
      border-radius: 8px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }

    h2 {
      margin-bottom: 1rem;
      text-align: center;
    }

    .table-container {
      margin-top: 2rem;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    th, td {
      padding: 1rem;
      border-bottom: 1px solid #ddd;
      text-align: left;
    }

    th {
      background-color: #007bff;
      color: white;
    }

    td {
      font-size: 0.9rem;
    }

    .btn {
      padding: 0.5rem 1rem;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .btn-view {
      background-color: #ffc107;
    }

    .btn-feedback {
      background-color: #28a745;
    }
  </style>
</head>
<body>

  <header>
    <h1>Historial de Servicios</h1>
  </header>

  <div class="container">
    <h2>Servicios Anteriores</h2>

    <div class="table-container">
      <table>
        <thead>
          <tr>
            <th>Fecha</th>
            <th>Servicio</th>
            <th>Técnico</th>
            <th>Estado</th>
            <th>Acción</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>2025-04-10</td>
            <td>Cambio de Aceite</td>
            <td>Juan Ramírez</td>
            <td>Completado</td>
            <td>
              <button class="btn btn-view">Ver Detalles</button>
              <button class="btn btn-feedback">Dejar Comentario</button>
            </td>
          </tr>
          <tr>
            <td>2025-03-15</td>
            <td>Revisión de Frenos</td>
            <td>María Torres</td>
            <td>Completado</td>
            <td>
              <button class="btn btn-view">Ver Detalles</button>
              <button class="btn btn-feedback">Dejar Comentario</button>
            </td>
          </tr>
          <tr>
            <td>2025-02-28</td>
            <td>Alineación de Ruedas</td>
            <td>Pedro García</td>
            <td>Completado</td>
            <td>
              <button class="btn btn-view">Ver Detalles</button>
              <button class="btn btn-feedback">Dejar Comentario</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

</body>
</html>
<!--Enlace a factura o pago: Incluir enlaces para ver las facturas o el detalle de los pagos realizados por cada servicio.

Exportar historial de servicios: Permitir al cliente exportar su historial de servicios a un formato PDF o CSV.

Notificaciones post-servicio: Enviar notificaciones por correo o WhatsApp para recordar al cliente que deje un comentario sobre su servicio.--> 