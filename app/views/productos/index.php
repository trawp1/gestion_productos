<h1>Listado Productos</h1>

<table border="1">

```
<tr>
    <th>Nombre</th>
    <th>Precio</th>
    <th>Categoría</th>
</tr>

<?php foreach ($productos as $producto): ?>

    <tr>
        <td><?= $producto['nombre'] ?></td>
        <td><?= $producto['precio'] ?></td>
        <td><?= $producto['nombre_categoria'] ?></td>
    </tr>

<?php endforeach; ?>
```

</table>

<h1>Lista producto actualizada</h1>

<table border="1">

```
<tr>
    <th>Nombre</th>
    <th>Precio</th>
    <th>Categoría</th>
    <th>Nombre proveedor</th>
    <th>Id categoría</th>
</tr>

<?php foreach ($productos as $producto): ?>

    <tr>
        <td><?= $producto['nombre'] ?></td>
        <td><?= $producto['precio'] ?></td>
        <td><?= $producto['nombre_categoria'] ?></td>
        <td><?= $producto['nombre_proveedor'] ?></td>
        <td><?= $producto['id_categoria'] ?></td>
    </tr>

<?php endforeach; ?>
```

</table>

<h1>Producto por ID getById</h1>

<table border="1">

```
<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Precio</th>
    <th>Categoría</th>
    <th>Proveedor</th>
</tr>

<tr>
    <td><?= $productoId['id'] ?></td>
    <td><?= $productoId['nombre'] ?></td>
    <td><?= $productoId['precio'] ?></td>
    <td><?= $productoId['nombre_categoria'] ?></td>
    <td><?= $productoId['nombre_proveedor'] ?></td>
</tr>
```

</table>
