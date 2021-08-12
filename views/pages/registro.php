<div class="d-flex justify-content-center text-center">
    <form class="p-5 bg-light" method="post">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="far fa-user"></i></span>
                </div>
                <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
        </div>

        <div class="form-group">
            <label for="email">email</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="far fa-envelope-open"></i></span>
                </div>
                <input type="email" class="form-control" id="email" name="email">
            </div>
        </div>

        <div class="form-group">
            <label for="pwd">contraseña</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                </div>
                <input type="password" class="form-control" id="pwd" name="pwd">
            </div>
        </div>

<?php
    $registro = formController::PostRegistro();
    
    if($registro == 'ok'){

        echo '<script>
        if(window.history.replaceState){
            window.history.replaceState(null,null,window.location.href);
        }

        </script>';
        echo '<div class="alert alert-success"> El usuario a sido registrado </div>';
    }
?>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>