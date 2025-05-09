<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registrar Vehículo - AutoGestión</title>
  <style>
    body { font-family: sans-serif; padding: 40px; background: #f0f0f0; }
    form { max-width: 400px; margin: auto; }
    input, select, button { display: block; margin: 10px 0; padding: 10px; width: 100%; }
  </style>
</head>
<body>
  <h2>Registrar Vehículo</h2>
  <form>
    <label>Placa</label>
    <input type="text" name="placa" required>

    <label>Marca</label>
    <input type="text" name="marca" required>

    <label>Modelo</label>
    <input type="text" name="modelo" required>

    <label>Año</label>
    <input type="number" name="anio" min="1900" max="2100" required>

    <button type="submit">Guardar Vehículo</button>
  </form>
</body>
</html>
