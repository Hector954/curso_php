<?php
    if(isset($_GET["id"])){
        $item = "id";
        $value = $_GET["id"];
        $usuario = formController::Postselect($item, $value);
        //echo "<pre>"; print_r($usuario); echo"</pre>";
    }

?>


<div class="d-flex justify-content-center text-center">
    <form class="p-5 bg-light" method="post">
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="far fa-user"></i></span>
                </div>
                <input type="text" class="form-control" value="<?php echo $usuario["nombre"];?>" laceholder="" id="nombre" name="unombre">
            </div>
        </div>

        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="far fa-envelope-open"></i></span>
                </div>
                <input type="email" class="form-control" value="<?php echo $usuario["email"];?>" placeholder=""id="email" name="uemail">
            </div>
        </div>

        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                </div>
                <input type="password" placeholder="Contraseña" class="form-control" placeholder=""id="pwd" name="upwd">
                <input type="hidden" name="pwdActual" value="<?php echo $usuario["pwd"];?>">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>