<?php
    ini_set('display_errors', 0 );
    error_reporting(0);
    session_start();
    include('./db.php');
    if(!$_SESSION['categoria']){
        if(!$_GET['categoria']){
            header('Location: ./index.php');
        }
        $_SESSION['categoria'] = $_GET['categoria'];
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="João Fernando">
    <meta name="description" content="Rede social de compartilhamento de eventos escolares">
    <meta name="keywords" content="Escola, Interescolare, Interescolar, Eventos, Rede Social, Rede Social Escolar">
    <meta name="robots" content="index,follow">
    <meta name="theme-color" content="#232425">
    <meta name="format-detection" content="telephone=no">
    <title>Interescolare</title>
    <meta property="og:title" content="Interescolare">
    <meta property="og:site_name" content="Interescolare">
    <meta property="og:description" content="Rede social de compartilhamento de eventos escolares">
    <meta property="og:url" content="https://interescolare.com">
    <meta property="og:image" content="https://interescolare.com/favicon/símbolo.png">
    <meta property="og:image:type" content="image/png">
    <link rel="stylesheet" href="../style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../favicon/símbolo.png" type="image/x-icon">
</head>
<body>
    <header class="navbar hover">
        <div class="center">
            <div class="left" style="text-align:center;">
                <a href="./"> <img src="../favicon/símbolo.png" alt="Interescolare" > </a>
            </div>
        </div>
    </header>
    <main id="jogos">
        <div class="center">
            <?php

                if(!$_GET["categoria"]){
                    $categoria = $_SESSION["categoria"];
                }else{
                    $categoria = $_GET["categoria"];
                }

                if(!$_POST["opt"]){
                    $sql = "SELECT * FROM `sos.delrey.jogos` WHERE categoria = '$categoria' AND numero = '3'";
                    $num = mysqli_query($conexao, $sql);
                    
                    if(mysqli_num_rows($num) > 0){
                        while($linha = mysqli_fetch_assoc($num)){
                           echo "<button id=\"boneco\"><img id=\"img\" src=\"./img/personagem.png\" title=\"Para começar clique\"></button>";
                            echo "<form class=\"perg\" action=\"jogo3.php\" method=\"post\" >";
                            echo "<p class=\"pergu\">".$linha["pergunta"]."</p> 
                            <br>
                            <input type=\"radio\" name=\"opt\" value=\"".$linha["opt1"]."\">".$linha["opt1"]."<br>
                            <input type=\"radio\" name=\"opt\" value=\"".$linha["opt2"]."\">".$linha["opt2"]."<br>
                            <input type=\"radio\" name=\"opt\" value=\"".$linha["opt3"]."\">".$linha["opt3"]."<br>
                            <input type=\"radio\" name=\"opt\" value=\"".$linha["opt4"]."\">".$linha["opt4"]."<br>
                            <input type=\"submit\" style=\"font-size: 35px; float:right; background-color: white; color: red;\" value=\">\">";
                            echo "</form>";
                            echo "<br>";
                            $_SESSION["pergunta"] = $linha["pergunta"];
                        }
                    }else{
                        echo "<a>Por favor retorne a página inicial e selecione a aula desejada</a>";
                    }
                }else{
                    $opt = $_POST["opt"];
                    $pergunta = $_SESSION["pergunta"];
                    $sql = "SELECT * FROM `sos.delrey.jogos` WHERE categoria = '$categoria' AND correta = '$opt' AND numero = '3'";
                    $num = mysqli_query($conexao, $sql);
                    if(mysqli_num_rows($num) > 0){
                        while($linha = mysqli_fetch_assoc($num)){
                            echo "<button id=\"boneco\"><img id=\"img\" src=\"./img/personagem.png\" title=\"Para começar clique\"></button>";
                        echo "<p id=\"correction\">Parabéns, você acertou essa questão <a href=\"./jogo4.php\" style=\"font-size: 35px; float:right; background-color: white; color: red; text-decoration:none;\" > > </a></p>";
                            echo "<br>";
                            $_SESSION['acertos'] += 1;
                        }
                    }else{
                        $sql = "SELECT * FROM `sos.delrey.jogos` WHERE categoria = '$categoria' AND numero = '3'";
                        $num = mysqli_query($conexao, $sql);
                        while($linha = mysqli_fetch_assoc($num)){
                            echo "<button id=\"boneco\"><img id=\"img\" src=\"./img/personagem.png\" title=\"Para começar clique\"></button>";
                            echo "<p id=\"correction\">Infelizmente você errou essa questão, a resposta correta é a opção ".$linha["correta"]." <a href=\"./jogo4.php\" style=\"font-size: 35px; float:right; background-color: white; color: red; text-decoration:none;\" > > </a></p>";
                            echo "<br>";
                        }
                    }
                }
            ?>
        </div>
    </main>
</body>
</html>