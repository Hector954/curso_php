<?php
class Conexion
{
    static public function conectar()
    {
        $link = new PDO("mysql:host=localhost;dbname=curso-php","root","");
        return $link;
    }
}
