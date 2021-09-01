<?php
$mysqli = new mysqli('localhost:8080', 'root', '', 'crud_basico');
?>
<?php

class config{

    static public function conectar() {

        #PDO("Nombre del servidor, nombre de la base de datos, "usuario" y "contraseña")
        $link = new PDO("mysql:host=localhost; dbname=crud_basico",
                        "root", 
                        "");

        $link->exec("set names utf8");

        return $link;
    }

}