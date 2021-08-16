<?php
class formController
{
    static public function PostRegistro()
    {
        if (isset($_POST["nombre"])) {
            $table = "registros";
            $datos = array("nombre" => $_POST["nombre"], "email" => $_POST["email"], "pwd" => $_POST["pwd"]);

            $respuesta = formModel::registerModel($table, $datos);
            return $respuesta;
        }
    }

    static public function Postselect($item, $value)
    {
        $table = "registros";
        $respuesta = formModel::selectModel($table, $item, $value);
        return $respuesta;
    }

    public function Postingreso()
    {
        if (isset($_POST["iemail"])) {

            $table = 'registros';
            $item = "email";
            $value = $_POST["iemail"];

            $respuesta = formModel::selectModel($table, $item, $value);

            if ($_POST['iemail'] != "" && $_POST['ipwd'] != "" &&  $respuesta["email"] == $_POST["iemail"] && $respuesta["pwd"] == $_POST["ipwd"]) {

                $_SESSION["ValidarIngreso"] = "ok";

                echo '<script> if(window.history.replaceState){window.history.replaceState(null,null,window.location.href);}
                window.location = "index.php?ruta=inicio";
                </script>';
            } else {
                echo '<script> if(window.history.replaceState){window.history.replaceState(null,null,window.location.href);}</script>';
                echo '<div class="alert alert-danger"> fallo ingreso </div>';
            }
        }
    }

    public function Postactualizar()
    {
        if (isset($_POST["unombre"])) {

            if (isset($_POST["upwd" != ""])) {
                $pass = $_POST["upwd"];
            } else {
                $pass = $_POST["pwdActual"];
            }
            $table = "registros";
            $datos = array(
                "id" => $_POST["idUser"],
                "nombre" => $_POST["unombre"],
                "email" => $_POST["uemail"],
                "pwd" => $pass
            );

            $respuesta = formModel::ActualizarModel($table, $datos);

            if ($respuesta == "ok") {
                echo '<div class="alert alert-success"> Usuario actualizado exitosamente </div>';
                
                echo 
                '<script> setTimeout(function(){
                     window.location = "index.php?ruta=inicio";
                },3000);
                </script>';
            }
        }
    }
}
