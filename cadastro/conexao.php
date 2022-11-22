<?php

$dbHost = 'localHost';
$dbUser = 'root';
$dbSenha = '';
$dbNome = 'bracodeferro';
$port = 3306;


    $conexao = new mysqli($dbHost, $dbUser, $dbSenha, $dbNome, $port);

    



  // if($conexao->connect_errno){
    //  echo "Erro";
  // }else{
  //    echo "conxeção efutuda com sucesso";
 //  }
?>