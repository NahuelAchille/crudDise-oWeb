            <label for="roles" class="form-label" >Rol
                <select name="roles" class="form-select shadow-none" name="roles" id="roles" required>
                    <option value="" selected disabled>Elija un rol...</option>
                        <?php
                        $query_roles = "SELECT id,nombre FROM roles ORDER BY nombre ASC";
                        $result_roles = mysqli_query($conexion, $query_roles);

                        if ($result_roles && mysqli_num_rows($result_roles) > 0) {
                            while ($row = mysqli_fetch_assoc($result_roles)) {
                                echo '<option value="' . $row['id'] . '">' . htmlspecialchars($row['nombre']) . '</option>';
                            }
                        } else {
                            echo '<option disabled>No se encontraron roles</option>';
                        }
                        ?>
                </select>
            </label>