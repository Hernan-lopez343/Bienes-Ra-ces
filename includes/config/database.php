<?php
function conectarDB(){
    $db = mysqli_connect('localhost', 'root', 'root','bienesraices_crud');
        if(!$db){
            echo "No se pudo realizar la conexión";
            exit;
        }
        return $db;
}