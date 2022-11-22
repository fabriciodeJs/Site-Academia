<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucesso</title>
    <style>
        h1,h2{
            font-size: 150px;
            text-align: center;

        }

        .nome-usuario {
            color: red
        }
    </style>

</head>
<body>

        <?php if(isset($_SESSION['ativa'])){ ?>

 
    <h1>Sucesso</h1>
    <h2>
        Bem - Vindo 
        <?php  echo $_SESSION['nome'];   ?>
    </h2>

       <?php }else{
        header("location: login.php");
       } ?>      

    <script src="success.js"></script>
</body>
</html>