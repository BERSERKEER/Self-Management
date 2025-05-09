<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Panel de Citas del Técnico</title>
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

    .btn-update {
      background-color: #ffc107;
    }

    .btn-complete {
      background-color: #28a745;
    }

    .btn-comment {
      background-color: #17a2b8;
    }
  </style>
</head>
<body>

  <header>
    <h1>Panel de Citas del Técnico</h1>
  </header>

  <div class="container">
    <h2>Mis Citas Asignadas</h2>

    <div class="table-container">
      <table>
        <thead>
          <tr>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Servicio</th>
            <th>Cliente</th>
            <th>Estado</th>
            <th>Acción</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>2025-05-12</td>
            <td>10:00</td>
            <td>Cambio de Aceite</td>
            <td>Carlos Pérez</td>
            <td>Pendiente</td>
            <td>
              <button class="btn btn-update">Marcar en Proceso</button>
              <button class="btn btn-comment">Añadir Comentario</button>
            </td>
          </tr>
          <tr>
            <td>2025-05-14</td>
            <td>09:00</td>
            <td>Revisión de Frenos</td>
            <td>Ana López</td>
            <td>En Proceso</td>
            <td>
              <button class="btn btn-complete">Marcar Completado</button>
              <button class="btn btn-comment">Añadir Comentario</button>
            </td>
          </tr>
          <tr>
            <td>2025-05-16</td>
            <td>15:00</td>
            <td>Alineación de Ruedas</td>
            <td>Pedro Sánchez</td>
            <td>Completado</td>
            <td>
              <button class="btn btn-comment">Añadir Comentario</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

</body>
</html>
