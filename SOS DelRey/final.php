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
            <?php if($_SESSION["acertos"] >= 3) {?>
                <h1>Parabéns você acertou: <?php echo $_SESSION['acertos']?></h1>
            <?php } ?>
            <?php if($_SESSION["acertos"] < 3) {?>
                <h1>Tente melhorar,  você acertou: <?php echo $_SESSION['acertos']?></h1>
            <?php } ?>
            <br>
             <a href="./"> Voltar para os exercícios</a>
        </div>
        
    </main>
</body>
</html>