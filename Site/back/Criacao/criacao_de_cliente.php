<?php
include "conn.php";//alterar
//inserção de dados no banco parte cadastro cliente
$nome=$_POST["name"];
$cep=$_POST["cep"];
$email=$_POST["email"];
$cartao='SELECT * FROM cartao WHERE num_cartao==999999'
$data=$_POST["data"];
$cod_seg=$_POST["codcs"];
$usuario=$_POST["user"];
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
    $enviar=$conn->prepare('INSERT INTO `cliente`(`cod_cliente`, `nome_cliente`, 
    `endereco_cliente`, `email_cliente`,cartao_credito`,`nome_usuario`) VALUES (NULL,:pnome,:pendereco,:pemail,:pcartão:pnu)');
    $enviar->bindValue(':pnome',$nome);
    $enviar->bindValue(':pendereco',$cep);
    $enviar->bindValue(':pemail',$email);
    $enviar->bindValue(':pcartão'$cartao)
    $enviar->bindValue(':pnu','0');
    $enviar->execute();
    header("location:../coisas_de_front/SiteTAFV2/cadastrofuncionarios.php?es=$es");//alterar
    }
}
?>
