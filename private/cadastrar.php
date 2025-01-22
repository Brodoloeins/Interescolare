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
    <section id="cadastroPost">
        <h2>Cadastre seu evento abaixo: </h2>
        <form class="form-login" action="./cadastrando.php" method="POST" enctype="multipart/form-data">
            <div class="top40 bt20"><label for="file">Selecione uma imagem </label></div>
            <input id="file" class="login-input file" type="file" name="file" required>
            <select required class="login-input" name="subject" required>
                <option selected="true" disabled="disabled">Selecione a matéria do seu evento</option>
                <?php
                
                    $sql = "SELECT * FROM `subject`";
                    $num = mysqli_query($conexao, $sql);
                
                    while($linha = mysqli_fetch_assoc($num)){
                        if($linha["nome"] != "Todas"){
                            echo "<option name=\"subject\">".$linha["nome"]."</option>";
                        }else{
                            echo " ";
                        }
                        
                    }
                ?>
            </select>
            <input class="login-input" type="text" name="title" placeholder="Digite o título" required>
            <input class="login-input" type="text" name="content" placeholder="Digite a descrição" required>
            <input class="login-input" type="text" name="link" placeholder="Digite o link (Opcional)" required>
            <input class="login-input btn" type="submit" name="acao" value="Cadastrar postagem!" >
        </form>
    </section>
</body>
</html>