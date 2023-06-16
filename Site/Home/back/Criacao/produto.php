<?php
include "conn.php";//feito
if (isset($_POST["enviar"])){
    $nume=$_POST["estoque"];
    $cor=$_POST["cor"];
    $pp=$_POST["pp"];
    $enviar=$conn->prepare('INSERT INTO `produto`(`cod_produto`, `num_estoque`, `cor_produto`,`preco_produto`) VALUES (NULL,:pnume,:pcor,:ppp)');
    $enviar->bindValue(':pnume',$nume);
    $enviar->bindValue(':pcor',$cor);
    $enviar->binndValue(':ppp',$pp);
    $enviar->execute();
    return 1;
}else{
    return 0;
}
?>