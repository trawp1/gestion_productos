<h1>Listado Clientes</h1>

<table border="1">
<tr>
    <th>Id</th>
    <th>Nombre</th>
    <th>Documento</th>
    <th>Correo</th>
    <th>Telefono</th>
</tr>

<?php

try {

    foreach ($clientes as $cliente) {

?>

        <tr>
            <td><?= $cliente['id'] ?></td>
            <td><?= $cliente['nombre'] ?></td>
            <td><?= $cliente['documento'] ?></td>
            <td><?= $cliente['correo'] ?></td>
            <td><?= $cliente['telefono'] ?></td>
        </tr>

<?php

    }

} catch (Exception $em) {

    echo "<tr>";
    echo "<td colspan='5'>Ocurrió un error al mostrar los clientes. no hay tabla que mostrar</td>";
    echo "</tr>"; $em->getMessage();

}

?>

</table>
