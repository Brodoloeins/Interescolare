<?php

    include("../SOS DelRey/db.php");
    session_start();

    $subject = $_POST["subject"];
    $pergunta = $_POST["pergunta"];
    $numero = $_POST["numero"];
    $opt1 = $_POST["opt1"];
    $opt2 = $_POST["opt2"];
    $opt3 = $_POST["opt3"];
    $opt4 = $_POST["opt4"];
    $correta = $_POST["correta"];

    $subject = mysqli_real_escape_string($conexao, $_POST["subject"]);
    $pergunta = mysqli_real_escape_string($conexao, $_POST["pergunta"]);
    $numero = mysqli_real_escape_string($conexao, $_POST["numero"]);
    $opt1 = mysqli_real_escape_string($conexao, $_POST["opt1"]);
    $opt2 = mysqli_real_escape_string($conexao, $_POST["opt2"]);
    $opt3 = mysqli_real_escape_string($conexao, $_POST["opt3"]);
    $opt4 = mysqli_real_escape_string($conexao, $_POST["opt4"]);
    $correta = mysqli_real_escape_string($conexao, $_POST["correta"]);

    $query = "INSERT INTO `sos.delrey.jogos`(`categoria`,`pergunta`, `opt1`, `opt2`, `opt3`, `opt4`, `correta`, `numero`) VALUES ('$subject', '$pergunta', '$opt1', '$opt2', '$opt3', '$opt4', '$correta', '$numero')";

    if(mysqli_query($conexao, $query)){
        header("Location: ./");
    }else{
        header("Location: ../");
    }

?>