<?php

require 'app.php';

function incluirtemplate(string $nombre,bool $inicio = false){
    include TEMPLATES_URL . "/${nombre}.php";
} 