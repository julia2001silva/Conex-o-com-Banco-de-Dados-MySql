<?php
//Acesso ao WS

$xml = simplexml_load_file("https://localhost/webhost/index.php");//faz requisição
//$xml = simplexml_load_file("https://juliafatec.000webhostapp.com/ws/index.php?id=1")

echo "Nome do Produto: " .$xml->nomeProduto ."<br />\n";
?>