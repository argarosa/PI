<?php
require "conexao/conn.php";
$login=$_POST['login'];
$nome_cliente=$_POST['nome_cliente'];
$falha='login ou nome_cliente incorretos';
if(isset($_POST['entrar'])){
$consulta=$conn->prepare("SELECT * FROM `cliente` WHERE  email_cliente='$login' AND nome_cliente='$nome_cliente'");
$consulta->execute();
if($consulta->rowcount()==1){
    session_start();
        $row=$consulta->fetch();
        $id=$row['ID_FUN'];
        $tipo=$row['TIPO'];
        $_SESSION['entrar']=$id;
        header("location:../coisas_de_front/SiteTAFV2/admin.php?id=$id");
}else{
    header("location:../../Home/index.html");
}
}
?>