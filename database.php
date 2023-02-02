<?php

$db = "mysql:dbname=mercadoria;host=127.0.0.1";
$dbuser = "root";
$dbpassword = "";

$pdo = new PDO($db,$dbuser,$dbpassword);

if(!$pdo){
    echo "Erro na conexão com o bando de dados";
}

?>