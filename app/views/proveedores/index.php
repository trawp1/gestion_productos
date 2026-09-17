<h1>Listado Proveedores</h1>

<table border="1">

<tr>
    <th>Nombre</th>
    <th>Ciudad</th>
    <th>Direccion</th>
</tr>

<?php

try {

    foreach ($proveedores as $proveedor) {

?>

        <tr>
            <td><?= $proveedor['nombre'] ?></td>
            <td><?= $proveedor['ciudad'] ?></td>
            <td><?= $proveedor['direccion'] ?></td>
        </tr>

<?php

    }

} catch (Exception $es) {

    echo "<tr>";
    echo "<td colspan='3'>Ocurrió un error al mostrar los proveedores, no hay tabla que mostrar.</td>";
    echo "</tr>"; $es->getMessage();

}

?>


</table>
