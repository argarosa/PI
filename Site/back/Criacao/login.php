<?php
require "conn.php";
$login=$_POST['login'];
$nome_cliente=$_POST['nome_cliente'];
$falha='login ou nome_cliente incorretos';
if(isset($_POST['entrar'])){
$consulta=$conn->prepare("SELECT * FROM `cliente` WHERE  email_cliente='$login' AND nome_cliente='$nome_cliente'");
$consulta->execute();
if($consulta->rowcount()==1){
    session_start();
        $row=$consulta->fetch();
        $id=$row['cod_cliente'];
        $_SESSION['entrar']=$id;
        header("location:../../Login/LoginJS/js/purchase/compra.html");
}else{
    header("location:../../Home/index.html");
}
?>
