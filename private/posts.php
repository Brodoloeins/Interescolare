<?php
    ini_set('display_errors', 0 );
    error_reporting(0);
    session_start();
    if(!$_SESSION['usuario']){
        header('Location:../');
    }
    include('../db/db.php');
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
        <?php
            include("./header.php");
        ?>
    </header>
    <section class="subject">
        <div class="w33"></div>
        <form action="postsC.php" method="post" class="form-subject">
            <select required class="login-input" name="subject">
                <option selected="true" disabled="disabled">Selecione a matéria desejada</option>
                <?php
                
                    $sql = "SELECT * FROM `subject`";
                    $num = mysqli_query($conexao, $sql);
                
                    while($linha = mysqli_fetch_assoc($num)){
                        echo "<option name=\"subject\">".$linha["nome"]."</option>";
                    }
                ?>
            </select>
            <input type="submit" value="Filtrar" class="login-input btn">
        </form>
        <div class="w33"></div>
    </section>
    <!-- Main -->
    <main id="main">
        <div class="centro">
            <?php

                //Variables about count
                $sql = "SELECT * FROM posts ORDER BY data DESC";
                $num = mysqli_query($conexao, $sql);
                
                if(mysqli_num_rows($num) > 0){
                    while($linha = mysqli_fetch_assoc($num)){
                    echo "<article class=\"post w100\">";
                    echo "<div class=\"img\"><img src=\"upload/".$linha["img"]."\"/></div>";
                    echo "<h3>".$linha["title"]."</h3>";
                    echo "<p>".$linha["content"]."</p>";
                    echo "<span>Link: </span><a target=\"_blank\" href=\"".$linha["link"]."\"> ".$linha["link"]."</a>";
                    echo "</article>";
                    echo "<br>";
                    }
                }else{
                    echo "Nenhum Evento Disponível";
                }

            ?>
        </div>
    </main>

</body>
</html>