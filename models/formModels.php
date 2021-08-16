<?php
require_once "conexion.php";

class formModel{
    static public function registerModel($table, $data){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $table (nombre,email,pwd) VALUES(:nombre,:email,:pwd)");

        $stmt->bindParam(":nombre", $data["nombre"],PDO::PARAM_STR);
        $stmt->bindParam(":email", $data["email"],PDO::PARAM_STR);
        $stmt->bindParam(":pwd", $data["pwd"],PDO::PARAM_STR);

        if($stmt->execute()){
            return "ok";
        }else{
            print_r(Conexion::conectar()->errorInfo());
        }
    }

    static public function selectModel($table, $item, $value){

        if($item ==null && $value == null){
            $stmt = Conexion::conectar()->prepare("SELECT *,DATE_FORMAT(fecha,'%d/%m/%Y') AS fecha FROM  $table ORDER BY id DESC");

            $stmt->execute();
            return $stmt->fetchAll();
        }else{
            $stmt = Conexion::conectar()->prepare("SELECT *,DATE_FORMAT(fecha,'%d/%m/%Y') AS fecha FROM  $table WHERE $item = :$item ORDER BY id DESC");

            $stmt->bindParam(":".$item, $value, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch();

        }
    }

    static public function ActualizarModel($table, $data){

        $stmt = Conexion::conectar()->prepare("UPDATE $table SET nombre = :nombre,email = :email,pwd=:pwd WHERE id=:id");

        $stmt->bindParam(":nombre", $data["nombre"],PDO::PARAM_STR);
        $stmt->bindParam(":email", $data["email"],PDO::PARAM_STR);
        $stmt->bindParam(":pwd", $data["pwd"],PDO::PARAM_STR);
        $stmt->bindParam(":id", $data["id"],PDO::PARAM_STR);

        if($stmt->execute()){
            return "ok";
        }else{
            print_r(Conexion::conectar()->errorInfo());
            
        }
    }
}