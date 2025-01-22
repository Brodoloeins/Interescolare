<?php
    session_start();

    include('../db/db.php');

    if(empty($_POST['usuario']) || empty($_POST['senha'])){
        header('Location:../index.php');
        exit();
    }

    $usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);
    $chave = $_POST['chave'];

    $query = "SELECT * FROM user where email = '$usuario'";

    $result = mysqli_query($conexao, $query);
    $row = mysqli_num_rows($result);

    

    if($row == 1){
        $chaveCorreta = sha1($row["id"].$row["senha"]);
        if($chave == $chaveCorreta){
            $id = $row["id"];
            $query = "UPDATE user set senha = md5('$senha') where email = '$usuario'";
            $result = mysqli_query($conexao, $query);            
            header("Location: ../private/posts.php");
        }
    }else{
        header("Location: ../");
    }

?>