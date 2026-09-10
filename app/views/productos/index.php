<h1>Listado Productos</h1>
<table border="1">

    <tr>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Categoria</th>
    </tr>
    <?php foreach ($productos as $producto): ?>
        <tr>
            <td><?= $producto['nombre'] ?></td>
            <td><?= $producto['precio'] ?></td>
            <td><?= $producto['categoria'] ?></td>
        </tr>
    <?php endforeach; ?>

</table>




<h1>Lista producto actualizada</h1>

<table border="1">  

<tr>
    <th>Nombre</th>
    <th>Precio</th>
    <th>Categoría</th>
    <th>Nombre proveedor</th>
</tr>

<?php foreach($productos as $producto): ?>

<tr>
    <td><?= $producto['nombre'] ?></td>
    <td><?= $producto['precio'] ?></td>
    <td><?= $producto['categoria'] ?></td>
    <td><?= $producto['nombre_proveedor'] ?></td>
</tr>

<?php endforeach; ?>

</table>

