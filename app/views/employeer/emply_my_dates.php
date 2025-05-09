<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Mis Citas</title>
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
      background-color: #28a745;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .btn-cancel {
      background-color: #dc3545;
    }

    .btn-schedule {
      background-color: #ffc107;
      color: black;
      margin-top: 1rem;
      display: block;
      width: 100%;
      text-align: center;
    }
  </style>
</head>
<body>

  <header>
    <h1>Mis Citas</h1>
  </header>

  <div class="container">
    <h2>Agenda de Servicios</h2>

    <div class="table-container">
      <table>
        <thead>
          <tr>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Servicio</th>
            <th>Técnico</th>
            <th>Estado</th>
            <th>Acción</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>2025-05-12</td>
            <td>10:00</td>
            <td>Cambio de Aceite</td>
            <td>Juan Ramírez</td>
            <td>Pendiente</td>
            <td>
              <button class="btn btn-cancel">Cancelar</button>
            </td>
          </tr>
          <tr>
            <td>2025-05-14</td>
            <td>09:00</td>
            <td>Revisión de Frenos</td>
            <td>María Torres</td>
            <td>En Proceso</td>
            <td></td>
          </tr>
          <tr>
            <td>2025-05-15</td>
            <td>15:00</td>
            <td>Alineación de Ruedas</td>
            <td>Juan Ramírez</td>
            <td>Completado</td>
            <td></td>
          </tr>
        </tbody>
      </table>

      <button class="btn btn-schedule">Agendar Nueva Cita</button>
    </div>
  </div>

</body>
</html>

<!-- Notificaciones automáticas: El cliente podría recibir notificaciones por correo electrónico o WhatsApp cuando el estado de la cita cambie.

Historial de servicios previos: Incluir un registro completo de todos los servicios anteriores.

Feedback del cliente: Permitir que el cliente deje comentarios sobre el servicio recibido o valore al técnico.-->