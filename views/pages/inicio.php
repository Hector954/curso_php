<?php
if (isset($_SESSION["ValidarIngreso"])) {
    if ($_SESSION["ValidarIngreso"] != "ok") {
        echo '<script>  window.location = "index.php?ruta=ingreso"; </script>';
        return;
    }
} else {
    echo '<script>  window.location = "index.php?ruta=ingreso"; </script>';
    return;
}
$usuarios = formController::Postselect(null,null);
//echo '<pre>';print_r($usuarios);echo '</pre>';
?>
<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Fecha</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($usuarios as $key => $value) : ?>
            <tr>
                <td><?php echo $key + 1 ?></td>
                <td><?php echo $value["nombre"] ?></td>
                <td><?php echo $value["email"] ?></td>
                <td><?php echo $value["fecha"] ?></td>
                <th>
                    <div>
                        <a class="btn btn-warning" href="index.php?ruta=editar&id= <?php echo $value["id"] ?>"><i class="fas fa-edit"></i></a>
                        <button class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </div>
                </th>
            </tr>

        <?php endforeach ?>
    </tbody>
</table>