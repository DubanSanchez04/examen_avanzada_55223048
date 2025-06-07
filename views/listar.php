<!DOCTYPE html>
<html>
<head>
    <title>Lista de Empleados</title>
</head>
<body>
    <h2>Lista de Empleados</h2>
    <a href="views/registrar.php">Registrar Nuevo</a><br><br>
    <table border="1" cellpadding="5">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Salario Base</th>
            <th>Comisión (%)</th>
            <th>Salario Total</th>
        </tr>
        <?php while ($row = $empleados->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= htmlspecialchars($row['nombre']) ?></td>
            <td>$<?= number_format($row['salario_base'], 2) ?></td>
            <td><?= $row['comision_pct'] ?>%</td>
            <td>$<?= number_format($row['salario_total'], 2) ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
