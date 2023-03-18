<?php

require_once('xml.class.php');
require_once('config.php');

$xml = new Xml();

$erro = 0;
$msgerro = "Consulta Realizada com sucesso";

//$idProduto = $%_GET['id']

$idProduto = 2; 
$consulta = "SELECT * FROM produtos WHERE idproduto = $idProduto";
$xml->OpenTag("response");

if($idProduto == '')
{
    $erro = 1;
    $mserro = 'Codigo Inválido';
}else{
    $result = $PDO->query($consulta);
    if($result){
        $rows = $result->fetch(PDO::FETCH_ASSOC);

        $xml->AddTag('nome',$rows['nome']);
        $xml->AddTag('valorproduto',$rows['valorproduto']);
    }else{

        $erro = 2;
        $mserro = 'Produto não foi localizado';
    }
}

$xml->AddTag('erro',$erro);
$xml->AddTag('msgerro',$msgerro);

$xml->CloseTag("response");

echo $xml;

?>