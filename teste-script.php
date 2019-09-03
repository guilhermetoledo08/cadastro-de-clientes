<?php
try {
    $con = new \PDO('mysql:host=localhost;dbname=cadastro_cliente', 'root', 'root');
    $con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    echo "Conectado com sucesso";
} catch(\PDOException $ex) {
    echo $ex->getMessage();
}