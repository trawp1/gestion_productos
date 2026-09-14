<h1>Lista Categorías</h1>

<table border="1">

    <tr>
        <th>Id Categoría</th>
        <th>Nombre</th>
        <th>descripcion</th>
    </tr>

    <?php foreach ($categorias as $categoria): ?>

        <tr>
            <td><?= $categoria['id_categoria'] ?></td>
            <td><?= $categoria['nombre'] ?></td>
            <td><?= $categoria['descripcion'] ?></td>
        </tr>

    <?php endforeach; ?>

</table>