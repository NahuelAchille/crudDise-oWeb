<?php
include_once __DIR__ . '/conection.php';

$sql = "SELECT u.nombre, r.nombre AS rol, u.email, u.fecha_nacimiento
        FROM usuarios u
        INNER JOIN roles r ON u.rol_id = r.id
        ORDER BY u.id DESC
        LIMIT 10";

$result = mysqli_query($conexion, $sql);
?>

<tbody>
<?php
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['nombre']) . "</td>";
        echo "<td>" . htmlspecialchars($row['rol']) . "</td>";
        echo "<td>" . htmlspecialchars($row['email']) . "</td>";
        echo "<td>" . htmlspecialchars($row['fecha_nacimiento']) . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='4'>No hay usuarios registrados.</td></tr>";
}
?>
</tbody>
