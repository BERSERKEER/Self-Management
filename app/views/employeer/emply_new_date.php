<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Agendar Nueva Cita</title>
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

    .form-group {
      margin-bottom: 1.5rem;
    }

    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 0.5rem;
    }

    .form-group input, .form-group select, .form-group textarea {
      width: 100%;
      padding: 0.8rem;
      border-radius: 4px;
      border: 1px solid #ccc;
    }

    .form-group select {
      background-color: #fff;
    }

    .form-group textarea {
      resize: vertical;
      height: 150px;
    }

    .btn {
      padding: 1rem 2rem;
      background-color: #28a745;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 1rem;
      width: 100%;
    }

    .btn-cancel {
      background-color: #dc3545;
    }
  </style>
</head>
<body>

  <header>
    <h1>Agendar Nueva Cita</h1>
  </header>

  <div class="container">
    <h2>Formulario de Cita</h2>

    <form>
      <div class="form-group">
        <label for="service">Tipo de Servicio</label>
        <select id="service" name="service" required>
          <option value="">Selecciona un servicio</option>
          <option value="aceite">Cambio de Aceite</option>
          <option value="frenos">Revisión de Frenos</option>
          <option value="alineacion">Alineación de Ruedas</option>
          <option value="bateria">Revisión de Batería</option>
          <option value="suspension">Revisión de Suspensión</option>
        </select>
      </div>

      <div class="form-group">
        <label for="date">Fecha y Hora</label>
        <input type="datetime-local" id="date" name="date" required>
      </div>

      <div class="form-group">
        <label for="technician">Técnico Preferido (Opcional)</label>
        <select id="technician" name="technician">
          <option value="">Selecciona un técnico</option>
          <option value="juan">Juan Ramírez</option>
          <option value="maria">María Torres</option>
          <option value="pedro">Pedro García</option>
        </select>
      </div>

      <div class="form-group">
        <label for="comments">Comentarios (Opcional)</label>
        <textarea id="comments" name="comments" placeholder="Detalles adicionales sobre el servicio..."></textarea>
      </div>

      <div class="form-group">
        <button type="submit" class="btn">Confirmar Cita</button>
        <button type="button" class="btn btn-cancel" onclick="window.history.back();">Cancelar</button>
      </div>
    </form>
  </div>

</body>
</html>
