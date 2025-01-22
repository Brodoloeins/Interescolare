<?php
    session_start();
    include('../db/db.php');

    $titulo = $_POST['title'];
    $conteudo = $_POST['content'];
    $linki = $_POST['link'];
    $img = $_FILES['file'];
    $userid = $_SESSION['id'];
    $subject = $_POST['subject'];

    if(empty($_POST['content']) || empty($_POST['title']) || $subject == "Todas" || $subject == "Selecione a matéria do seu evento"){
        header('Location:./posts.php');
        exit();
    }

    $title = mysqli_real_escape_string($conexao, $_POST['title']);
    $content = mysqli_real_escape_string($conexao, $_POST['content']);
    $link = mysqli_real_escape_string($conexao, $_POST['link']);

    $extensao = strtolower(substr($img['name'], -4));
    $nome = md5(time()) . $extensao;

    $query = "INSERT INTO `posts`(`img`,`data`,`title`, `content`, `link`, `UserId`, `subject`) VALUES ('$nome', NOW(), '$titulo','$conteudo', '$linki', '$userid', '$subject')";

    move_uploaded_file($img['tmp_name'], "upload/".$nome); 

    if(mysqli_query($conexao, $query)){
        header("Location:./posts.php");
    }else{
        header("Location:./posts.php");
    }
    mysqli_close($conexao);

?>