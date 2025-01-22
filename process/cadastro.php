<?php
  include('../db/db.php');

    if(!$_POST['username'] || !$_POST['pwd'] || !$_POST['email']){
        header("Location: ../");
    }

    $username = $_POST['username'];
    $pwd = $_POST['pwd'];
    $email = $_POST['email'];
    $query = "INSERT INTO `user`(`nome`, `email`, `senha`) VALUES ('$username', '$email', md5('$pwd'))";

    if(mysqli_query($conexao, $query)){
        header("Location:../");
    }else{
        header("Location:../");
    }
?>