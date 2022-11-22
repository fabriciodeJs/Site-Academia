<?php

$dbHost = 'localHost';
$dbUser = 'root';
$dbSenha = '';
$dbNome = 'bracodeferro';
$port = 3306;


    $conexao = new mysqli($dbHost, $dbUser, $dbSenha, $dbNome, $port);

    function login($conexao){
      if(isset($_POST['submit']) AND !empty($_POST['cpf']) AND !empty($_POST['senha'])){
          $cpf = filter_input(INPUT_POST, "cpf", FILTER_VALIDATE_INT);
          $senha = $_POST['senha'];
  
          $query = "SELECT * FROM login WHERE cpf = '$cpf' AND senha = '$senha'";
  
          $executar = mysqli_query($conexao, $query);
  
          $return = mysqli_fetch_assoc($executar);
  
          if(!empty($return['cpf'])){
            session_start();
            $_SESSION['ativa'] = TRUE;
            echo header("location: Sucesso.php");
          }else{
              echo "Usuario ou senha não encotrados";
          }
           
        }
    }

  // if($conexao->connect_errno){
    //  echo "Erro";
  // }else{
  //    echo "conxeção efutuda com sucesso";
 //  }
?>