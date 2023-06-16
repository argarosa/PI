<?php
include "conn.php";//feito
if (isset($_POST["enviar"])){
    $cartao=$_POST["cartao"];
    $numc=$_POST["ncartao"];
    $data=$_POST["data"];
    $cod_seg=$_POST["codcs"];
    $enviar=$conn->prepare('INSERT INTO `cartao`(`num_cartao`, `data_validade`, `cod_seg`) VALUES (:pnumc,:pdatav,:pcod)');
    $enviar->bindValue(':pnumc',$numc);
    $enviar->bindValue(':pdatav',$data);
    $enviar->binndValue(':pcod',$cod_seg);
    $enviar->execute();
    return 1;
}else{
    return 0;
}
?>