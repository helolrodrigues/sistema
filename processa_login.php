<?php
    session_start();
    include_once 'conexao.php';

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $consulta = "SELECT * FROM usuarios WHERE email =:email AND senha =:senha ";

    $stmt = $pdo->prepare($consulta);

    // Vincula os parametros
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);

    // Executa a consulta
    $stmt->execute();

    // Obtém o numero de registros encontrados 
    $registro = $stmt->rowCount();

    // Obtém o resultado
    $resultado = $stmt-> fetch(PDO::FETCH_ASSOC);

    // var_dump($resultado);

    if($registro == 1){
        $_SESSION['id'] = $resultado['id'];
        $_SESSION['nome'] = $resultado['nome'];
        $_SESSION['email'] = $resultado['email'];
        // echo 'OK VALIDO';
        header('location: restrita.php');
    }else{
        // echo 'NÃO VALIDO';
        header('location: index.php');
    }

?>