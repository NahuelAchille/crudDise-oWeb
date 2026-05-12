<?php
include_once __DIR__ . '/conection.php';

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

$sql = "SELECT u.id, u.nombre, u.email, u.dni, r.nombre AS rol, u.activo, u.fecha_nacimiento
        FROM usuarios u
        INNER JOIN roles r ON u.rol_id = r.id
        ORDER BY u.id ASC";

$result = mysqli_query($conexion, $sql);

if (!$result) {
    die("Error en la consulta: " . mysqli_error($conexion));
}
?>

<tbody>
<?php
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['id']) . "</td>";
        echo "<td>" . htmlspecialchars($row['nombre']) . "</td>";
        echo "<td>" . htmlspecialchars($row['email']) . "</td>";
        echo "<td>" . htmlspecialchars($row['dni']) . "</td>";
        echo "<td>" . htmlspecialchars($row['rol']) . "</td>";
        echo "<td>" . ($row['activo'] ? 'Activo' : 'Inactivo') . "</td>";
        echo "<td>" . htmlspecialchars($row['fecha_nacimiento']) . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='7'>No hay usuarios registrados.</td></tr>";
}
?>
</tbody>
