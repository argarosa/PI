<?php
include "conn.php"//feito
if(isset($_POST["enviar"])){
    $pix=$_POST["pix"];
    $cpf=$_POST["cpf"];
    $rg=$_POST["rg"];
    $cnh=$_POST["cnh"];
    $medico=$_POST["med"];
    $eleitor=$_POST["eleitor"];
    $enviar=$conn->prepare('INSERT INTO `dados_cartao`(`cod_cartao`, `pix_cliente`, `cpf_cliente`, `rg_cliente`, `cnh_cliente`, `medico_cliente`, `curriculo_cliente`, `titulo_eleitor`)
     VALUES (NULL,:ppix,:pcpf,:prg,:pcnh,:pmedico,:pcurriculo,:peleitor)');
    $enviar->bindValue(':ppix',$pix);
    $enviar->bindValue(':pcpf',$cpf);
    $enviar->bindValue(':prg',$rg);
    $enviar->bindValue(':pcnh',$cnh);
    $enviar->bindValue(':pmedico',$medico);
    $enviar->bindValue(':pcurriculo',$curriculo);
    $enviar->bindValue(':peleitor',$eleitor);
    $enviar->execute();
    return 1;
}else{
    return 0;
}
?>