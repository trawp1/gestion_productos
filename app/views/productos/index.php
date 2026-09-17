<h1>Listado Productos</h1>

<table border="1">

<tr>
    <th>Nombre</th>
    <th>Precio</th>
    <th>Categoría</th>
</tr>

<?php

try {

    foreach ($productos as $producto) {

?>

        <tr>
            <td><?= $producto['nombre'] ?></td>
            <td><?= $producto['precio'] ?></td>
            <td><?= $producto['nombre_categoria'] ?></td>
        </tr>

<?php

    }

} catch (Exception $e) {

    echo "<tr>";
    echo "<td colspan='3'>Ocurrió un error al mostrar los productos.</td>";
    echo "</tr>";

}

?>


</table>

<h1>Lista producto actualizada</h1>

<table border="1">


<tr>
    <th>Nombre</th>
    <th>Precio</th>
    <th>Categoría</th>
    <th>Descripción</th>
    <th>Nombre proveedor</th>
    <th>Id categoría</th>
</tr>

<?php

try {

    foreach ($productos as $producto) {

?>

        <tr>
            <td><?= $producto['nombre'] ?></td>
            <td><?= $producto['precio'] ?></td>
            <td><?= $producto['nombre_categoria'] ?></td>
            <td><?= $producto['descripcion_categoria'] ?></td>
            <td><?= $producto['nombre_proveedor'] ?></td>
            <td><?= $producto['id_categoria'] ?></td>
        </tr>

<?php

    }

} catch (Exception $e) {

    echo "<tr>";
    echo "<td colspan='6'>Ocurrió un error al mostrar los productos.</td>";
    echo "</tr>";

}

?>


</table>

<h1>Producto por ID getById</h1>

<table border="1">


<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Precio</th>
    <th>Categoría</th>
    <th>Proveedor</th>
</tr>

<?php

try {

?>

    <tr>
        <td><?= $productoId['id'] ?></td>
        <td><?= $productoId['nombre'] ?></td>
        <td><?= $productoId['precio'] ?></td>
        <td><?= $productoId['categoria'] ?></td>
        <td><?= $productoId['idproveedor'] ?></td>
    </tr>

<?php

} catch (Exception $er) {

    echo "<tr>";
    echo "<td colspan='5'>Ocurrió un error al mostrar el producto. no hay tabla producto que mostrar</td>";
    echo "</tr>"; $er->getMessage();

}

?>


</table>
