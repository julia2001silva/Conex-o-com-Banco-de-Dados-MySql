<?php

//configuração do Banco de Dados

define('MYSQL_HOST', 'localhost');
define('MYSQL_USER', 'root');
define('MYSQL_PASSWORD', '');
define('MYSQL_DB_NAME', 'id20390975_projeto');

try{
    $PDO= new PDO('mysql:host='.MYSQL_HOST.';'.'dbname='.
    MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD);
}catch(PDOException $e){
 echo 'Erro ao conectar com o MySQL:'.$e->getMessage();
 
}

?>