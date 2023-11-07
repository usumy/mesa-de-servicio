<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Fallas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">
    <h1>Registro de Fallas</h1>
    <form id="fallaForm" method="POST" action="procesar_formulario.php">
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción de la Falla</label>
            <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="prioridad" class="form-label">¿Cual es el grado de prioridad?</label>
            <select class="form-select" id="prioridad" name="prioridad" required>
                <option value="alta">Alta</option>
                <option value="media">Media</option>
                <option value="baja">Baja</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="departamento" class="form-label">¿De qué departamento es?</label>
            <select class="form-select" id="departamento" name="departamento" required>
                <option value="departamento-artes">Departamento de artes</option>
                <option value="departamento-contabilidad">Departamento de contabilidad</option>
                <option value="departamento-finanzas">Departamento de finanzas</option>
                <option value="departamento-RH">Departamento de recursos humanos</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="nombreemple" class="form-label">Nombre del empleado</label>
            <input type="text" class="form-control" id="nombreemple" name="nombreemple" required>
        </div>
        <button type="submit" class="btn btn-primary">Enviar Ticket</button>
    </form>
</div>

<div class="container mt-5">
    <h2>Fallas Registradas</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Descripción</th>
                <th scope="col">Prioridad</th>
                <th scope="col">Departamento</th>
                <th scope="col">Nombre del Empleado</th>
                <th scope="col">Resuelto</th>
            </tr>
        </thead>
        <tbody>
            <?php
           
            $fallas = obtenerFallas(); // Función hipotética para obtener las fallas desde una base de datos

            foreach ($fallas as $falla) {
                echo "<tr>";
                echo "<th scope='row'>" . $falla['id'] . "</th>";
                echo "<td>" . $falla['descripcion'] . "</td>";
                echo "<td>" . $falla['prioridad'] . "</td>";
                echo "<td>" . $falla['departamento'] . "</td>";
                echo "<td>" . $falla['nombreemple'] . "</td>";
                echo "<td><input type='checkbox' class='check-box'></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
