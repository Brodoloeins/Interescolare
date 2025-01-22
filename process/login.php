<?php
    session_start();

    include('../db/db.php');

    if(empty($_POST['usuario']) || empty($_POST['senha'])){
        header('Location:../index.php');
        exit();
    }

    $usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

    $query = "SELECT * FROM user where email = '$usuario' and senha = md5('$senha')";

    $result = mysqli_query($conexao, $query);
    $row = mysqli_num_rows($result);

    if($row == 1){
        while($linha = mysqli_fetch_assoc($result)){
            $_SESSION['id'] = $linha["id"];
            $_SESSION['usuario'] = $linha["nome"];
        }
        $_SESSION['email'] = $usuario;
        header("Location:../private/posts.php");
        exit();
    }else{
        header("Location: ../");
    }

?>