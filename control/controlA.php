<?php

    include('../db/db.php');
    session_start();

    $subject = $_POST['subject'];
    $content = $_POST['content'];

    $subject = mysqli_real_escape_string($conexao, $subject);
    $content = mysqli_real_escape_string($conexao, $content);

    $query = "INSERT INTO `sos.delrey.categorias`(`nome`, `materia`) VALUES ('$content', '$subject')";

    if(mysqli_query($conexao, $query)){
        header("Location: ./");
    }else{
        header("Location: ../");
    }

?>