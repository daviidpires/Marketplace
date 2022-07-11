<?php
    session_start();
    include('verifica_login.php');
?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Login - PARA-PET</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css"/>
</head>

<h2>Olá, <?php echo $_SESSION['usuario'];?>!</h2>


<a href="cadastro_produto.php"><button class="button is-normal is-link is-outlined">Cadastrar novo PRODUTO</button></a>



<h2><a href="logout.php" class="button is-normal is-danger is-outlined">SAIR</a></h2>