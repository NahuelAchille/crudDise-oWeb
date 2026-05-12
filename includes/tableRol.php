    <?php
    include_once __DIR__ . '/conection.php';

    $sql = "SELECT id, nombre, descripcion, activo FROM roles ORDER BY id ASC";
    $result = mysqli_query($conexion, $sql);
    ?>

    <tbody>
    <?php
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['id']) . "</td>";
            echo "<td>" . htmlspecialchars($row['nombre']) . "</td>";
            echo "<td>" . htmlspecialchars($row['descripcion']) . "</td>";

            $countQuery = "SELECT COUNT(*) AS total FROM usuarios WHERE rol_id = " . intval($row['id']);
            $countResult = mysqli_query($conexion, $countQuery);
            $countRow = mysqli_fetch_assoc($countResult);
            echo "<td>" . $countRow['total'] . "</td>";

            $estado = $row['activo'] == 1 ? 'Activo' : 'Inactivo';
            echo "<td>" . $estado . "</td>";

            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='5'>No hay roles registrados.</td></tr>";
    }
    ?>
    </tbody>
