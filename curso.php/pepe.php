
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
</head>
<body>
    <h2>Formulario de Registro</h2>
    <form action="main.php" method="POST">
        <!-- Campo para Nombre -->
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <!-- Campo para Apellido -->
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required><br><br>

        <!-- Campo para DNI -->
        <label for="dni">DNI:</label>
        <input type="text" id="dni" name="dni" required><br><br>

        <!-- Campo para Correo Electrónico -->
        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required><br><br>

        <!-- Campo para Fecha de Nacimiento -->
        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required><br><br>

        <!-- Botones Radio para Empleado o Cliente -->
        <label>¿Eres empleado o cliente?</label><br>
        <input type="radio" id="empleado" name="tipo" value="empleado" required>
        <label for="empleado">Empleado</label><br>
        <input type="radio" id="cliente" name="tipo" value="cliente" required>
        <label for="cliente">Cliente</label><br><br>

        <!-- Botón para Enviar -->
        <input type="submit" value="Enviar">
    </form>
</body>
</html>