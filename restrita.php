<?php
    session_start();

    if( !isset($_SESSION['id']) and !isset($_SESSION['nome']) and !isset($_SESSION['email']) ){
        unset(
            $_SESSION['id'],
            $_SESSION['nome'],
            $_SESSION['email']
        );
        header('location: index.php');
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAINEL DE CONTROLE</title>
</head>
<body>
    <h1>BEM VINDO FULANO DE TAL</h1>
    <P>PÁGINA RESTRITA Heloísa </P>

    <button>
        <a href="login.php">SAIR</a>
    </button>
</body>
</html>