<?php
    session_start();
    include('../db/db.php');

    $titulo = $_POST['title'];
    $conteudo = $_POST['report'];
    $userid = $_SESSION['id'];

    if(empty($_POST['report']) || empty($_POST['title'])){
        header('Location:./');
        exit();
    }

    $title = mysqli_real_escape_string($conexao, $_POST['title']);
    $content = mysqli_real_escape_string($conexao, $_POST['report']);

    $query = "INSERT INTO `bounties`(`title`, `conteudo`,`date`, `UserId`) VALUES ('$titulo', '$conteudo', NOW(), '$userid')";

    if(mysqli_query($conexao, $query)){
        header("Location:./");
    }else{
        header("Location:./");
    }
    mysqli_close($conexao);

?>