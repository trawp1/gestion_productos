<h1>Lista Categorías</h1>

<table border="1">

<tr>
    <th>Id Categoría</th>
    <th>Nombre</th>
    <th>Descripción</th>
</tr>

<?php

try {

    foreach ($categorias as $categoria) {

?>

        <tr>
            <td><?= $categoria['id_categoria'] ?></td>
            <td><?= $categoria['nombre'] ?></td>
            <td><?= $categoria['descripcion_categoria'] ?></td>
        </tr>

<?php

    }

} catch (Exception $ey) {

    echo "<tr>";
    echo "<td colspan='3'>Ocurrió un error al mostrar las categorías.</td>";
    echo "</tr>"; $ey->getMessage();

}

?>

</table>
