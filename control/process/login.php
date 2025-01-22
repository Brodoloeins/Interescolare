<?php
    session_start();

    include('../../SOS DelRey/db.php');

    if(empty($_POST['usuario']) || empty($_POST['senha'])){
        header('Location:../control.php');
        exit();
    }

    $usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

    $query = "SELECT * FROM `sos.delrey.user` where nome = '$usuario' and senha = md5('$senha')";

    $result = mysqli_query($conexao, $query);
    $row = mysqli_num_rows($result);

    if($row == 1){
        $_SESSION['adm'] = $usuario;
        header("Location:../control.php");
        exit();
    }else{
        header("Location: ../");
    }

?>