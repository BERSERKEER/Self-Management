<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Agendar Cita - AutoGestión</title>
  <style>
    body { font-family: sans-serif; padding: 40px; background: #fdfdfd; }
    form { max-width: 500px; margin: auto; }
    input, select, button { display: block; margin: 10px 0; padding: 10px; width: 100%; }
  </style>
</head>
<body>
  <h2>Agendar Nueva Cita</h2>
  <form>
    <label>Vehículo</label>
    <select name="vehiculo_id" required>
      <option value="">-- Selecciona tu vehículo --</option>
      <!-- Opciones dinámicas -->
    </select>

    <label>Servicio</label>
    <select name="servicio_id" required>
      <option value="">-- Selecciona el servicio --</option>
      <option value="1">Cambio de aceite</option>
      <option value="2">Alineación y balanceo</option>
      <option value="3">Revisión general</option>
    </select>

    <label>Fecha</label>
    <input type="date" name="fecha" required>

    <label>Hora</label>
    <input type="time" name="hora" required>

    <button type="submit">Agendar Cita</button>
  </form>
</body>
</html>
