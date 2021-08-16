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
$usuarios = formController::Postselect(null, null);
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
                    <div class="btn-group">
                        <div class="px-1">
                            <a class="btn btn-warning" href="index.php?ruta=editar&id= <?php echo $value["id"] ?>"><i class="fas fa-edit"></i></a>
                        </div>
                        <form method="post">
                            <input type="hidden" value="<?php echo $value['id']; ?>" name="Dregistro">

                            <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>

                            <?php 
                            $eliminar = <form action=""></form>


                            ?>

                        </form>
                    </div>
                </th>
            </tr>

        <?php endforeach ?>
    </tbody>
</table>