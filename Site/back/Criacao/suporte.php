<?php
include "conn.php";//feito
if (isset($_POST["enviar"])){
    $nomes=$_POST["ns"];
    $emails=$_POST["emails"];
    $us=$_POST["us"];
    $enviar=$conn->prepare('INSERT INTO `suporte`(`cod_suporte`, `nome_suporte`, `email_suporte`,`usuario_suporte`) VALUES (NULL,:pnumes,:pemails,:pus)');
    $enviar->bindValue(':pnumes',$nomes);
    $enviar->bindValue(':pemails',$emails);
    $enviar->binndValue(':pus',$us);
    $enviar->execute();
    return 1;
}else{
    return 0;
}
?>