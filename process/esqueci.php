<?php
    session_start();

    include('../db/db.php');

    if(empty($_POST['usuario'])){
        header('Location:../esqueci.php');
        exit();
    }

    $usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);

    $query = "SELECT * FROM user where email = '$usuario'";

    $result = mysqli_query($conexao, $query);
    $row = mysqli_num_rows($result);

    if($row == 1){
        $chave = sha1($row["id"].$row["senha"]);
        echo "<a href='https://interescolare.com/process/alterar.php?chave=".$chave."'>https://interescolare.com/process/alterar.php?chave=".$chave."</a>";
    }else{
        echo "Erro, usuário não encontrado";
    }

?>