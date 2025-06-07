<!DOCTYPE html>
<html>
<head>
    <title>Registrar Empleado</title>
</head>
<body>
    <h2>Registrar Empleado</h2>
    <form method="post" action="../fin.php">
        Nombre: <input type="text" name="nombre" required><br><br>
        Salario Base: <input type="number" step="0.01" name="salario_base" required><br><br>
        Comisión (%): <input type="number" step="0.01" name="comision_pct" required><br><br>
        <input type="submit" value="Guardar">
    </form>
    <br>
    <a href="../index.php">Ver Lista</a>
</body>
</html>
