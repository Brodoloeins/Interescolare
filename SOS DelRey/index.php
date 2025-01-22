<?php
    include('./db.php');
    session_start();
    session_destroy();
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
                <a href="../private/posts.php"> <img src="../favicon/símbolo.png" alt="Interescolare" > </a>
            </div>
        </div>
    </header>
    <section class="subject">
        <div class="center">
            <?php
            
                $sql = "SELECT * FROM `sos.delrey.categorias`";
                $num = mysqli_query($conexao, $sql);
            
                while($linha = mysqli_fetch_assoc($num)){
                    echo "<article class=\"quests ".$linha["materia"]."\">";
                    echo "<a href=\"https://Interescolare.com/SOS%20DelRey/jogo.php?categoria=".$linha["nome"]."\" >".$linha["nome"]."</a>";
                    echo "</article>";
                }
            ?>
        </div>
    </section>
</body>
</html>