<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>Buscar por DNI</title>
</head>
<body>
    <form action="main.php" method="POST">
    <div>
        <label for="nombre">Nombre </label>
        <input type="text" class="texto" name="nombre" id="nombre" placeholder="Nombre">
    </div>
    <div>
        <label for="apellido">Apellido </label>
        <input type="text" class="texto" name="apellido" id="apellido" placeholder="Apellido">
    </div>
    <div>
        <label for="fecha_nacimiento">Fecha Nacimiento </label>
        <input type="text" class="texto" name="fecha_nacimiento" id="fecha_nacimiento" placeholder="Fecha Nacimiento">
    </div>
    <div>
    <label for="dni">DNI </label>
        <input type="text" class="texto" name="dni" id="dni" placeholder="DNI">
    </div>
    <div>
        <input type="radio" value="cliente" name="opcion">
        <input type="radio" value="empleado" name="opcion">
    </div>
         <input type="submit"class="boton" value="ENVIAR">
    
    </form>
    
</body>
</html>