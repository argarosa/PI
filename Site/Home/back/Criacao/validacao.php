<?php
#VALIDAÇÃO DOS DADOS NO LADO DO SERVIDOR
#cartão
$cartao=$_POST["cartao"];
$numc=$_POST["ncartao"];
$data=$_POST["data"];
$cod_seg=$_POST["codcs"];
#compra
$prodcom=$_POST["prod"];
$datacom=$_POST["data"];
$comsup=$_POST["s"];
$quantidadeprod=$_POST["qp"];
$compag=$_POST['compag']
#criação_cliente
$nome=$_POST["nome"];
$cep=$_POST["cep"];
$email=$_POST["email"];
$cartao=$_POST["cartao"];
$numc=$_POST["ncartao"];
$data=$_POST["data"];
$cod_seg=$_POST["codcs"];
$usuario=$_POST["user"];
#dados_bring
$pix=$_POST["pix"];
$cpf=$_POST["cpf"];
$rg=$_POST["rg"];
$cnh=$_POST["cnh"];
$medico=$_POST["med"];
$eleitor=$_POST["eleitor"];
#produto
$nume=$_POST["estoque"];
$cor=$_POST["cor"];
$pp=$_POST["pp"];
#suporte
$nomes=$_POST["ns"];
$emails=$_POST["emails"];
$us=$_POST["us"];
#usuario
$nomeu=$_POST["nu"];
$su=$_POST["su"];
$dr=$_POST["dr"];
if(isset($_POST['cadastrar'])){
    if(!preg_match("/^[A-Za-z]{3,20}$/",$nome)){#validação
        header("location:../coisas_de_front/SiteTAFV2/cadastrofuncionarios.php?enom=$nom");//alterar para onde vai
    }elseif(!preg_match("/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/",$email)){#validação
        header("location:../coisas_de_front/SiteTAFV2/cadastrofuncionarios.php?eemail=$eemail");//alterar para onde vai
    }elseif(!preg_match("/^[0-9]{5,5}[-][0-9]{3,3}$/",$cep)){#validação
        header("location:../coisas_de_front/SiteTAFV2/cadastrofuncionarios.php?es=$es");//alterar
    //elseif(!preg_match("/^[A-Za-z]{3,20}$/",$nome)){#validação
       // header("location:../coisas_de_front/SiteTAFV2/cadastrofuncionarios.php?es=$es");//alterar
    }else{
        header("location:criacao_de_cliente.php")
    }
?>