<h1> Ingreso </h1>
<div class="d-flex justify-content-center text-center">
    <form class="p-5 bg-light" method="post">
        <form>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="iemail">
            </div>
            <div class="form-group">
                <label for="pwd">Contraseña:</label>
                <input type="password" class="form-control" name="ipwd">
            </div>
            <div class="form-group form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox"> Recordar
                </label>
            </div>

            <?php
            $ingreso = new formController();
            $ingreso-> Postingreso();
            ?>

            <button type="submit" class="btn btn-primary">Ingresar</button>
        </form>
    </form>
</div>