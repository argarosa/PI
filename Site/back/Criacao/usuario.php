<?php
include "conn.php";//feito
if (isset($_POST["enviar"])){
    $nomeu=$_POST["nu"];
    $su=$_POST["su"];
    $dr=$_POST["dr"];
    $enviar=$conn->prepare('INSERT INTO `usuario`(`cod_usuario`, `nome_usuario`,`data_registro`) VALUES (NULL,:pnu,:psu,:pdr)');
    $enviar->bindValue(':pnu',$nomeu);
    $enviar->bindValue(':psu',$su);
    $enviar->binndValue(':pdr',$dr);
    $enviar->execute();
    return 1;
}else{
    return 0;
}
?>