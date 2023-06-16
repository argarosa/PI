<?php
include "conn.php";//feito
if (isset($_POST["enviar"])){
    $prodcom=$_POST["prod"];
    $datacom=$_POST["data"];
    $comsup=$_POST["s"];//ver
    $quantidadeprod=$_POST["qp"];
    $compag=$_POST['compag']
    $enviar=$conn->prepare('INSERT INTO `compra`(`cod_compra`, `produto_compra`, `data_compra`, `compra_suporte`,`quantidade_produto`,`compra_pagamento`) 
    VALUES (NULL,:pdc,:pdatac,:pcos,:pquantp,:pcmp)');
    $enviar->bindValue(':pdc',$prodcom);
    $enviar->bindValue(':pdatac',$datacom);
    $enviar->bindValue(':pcos',$comsup);
    $enviar->bindValue(':pquantp',$quantidadeprod);
    $enviar->bindValue(':pcmp',$compag);
    $enviar->execute();
    return 1;
}else{
    return 0;
}
?>