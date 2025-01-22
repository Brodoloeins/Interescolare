<?php
    include('../SOS DelRey/db.php');
    session_start();

    if(!$_SESSION['adm']){
        header("Location: ./index.php");
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
            <div class="left">
                <a href="../private/posts.php"> <img src="../favicon/símbolo.png" alt="Interescolare" > </a>
            </div>
        </div>
    </header>

    <br><br><br>

    <main id="jogos">
        <div class="center">    
        <form action="controlP.php" method="post">
                <h1>Cadastrar perguntas</h1>
                <select required class="login-input" name="subject">
                    <option selected="true" disabled="disabled">Selecione a aula desejada</option>
                    <?php
                    
                        $sql = "SELECT * FROM `sos.delrey.categorias`";
                        $num = mysqli_query($conexao, $sql);
                    
                        while($linha = mysqli_fetch_assoc($num)){
                            echo "<option name=\"subject\">".$linha["nome"]."</option>";
                        }
                    ?>
                </select>
                <input class="login-input" type="text" name="numero" placeholder="Digite o número da pergunta" required>
                <input class="login-input" type="text" name="pergunta" placeholder="Digite a pergunta" required>
                <input class="login-input" type="text" name="opt1" placeholder="Digite a opção 1" required>
                <input class="login-input" type="text" name="opt2" placeholder="Digite a opção 2" required>
                <input class="login-input" type="text" name="opt3" placeholder="Digite a opção 3" required>
                <input class="login-input" type="text" name="opt4" placeholder="Digite a opção 4" required>
                <input class="login-input" type="text" name="correta" placeholder="Digite o texto da opção correta" required>
                <input class="login-input btn" type="submit" name="acao" value="Cadastrar pergunta!" >
            </form>
        </div>
    </main>

    <br><br><br><br><br>
    
    <section id="jogos">
        <div class="center">
           
        <form action="controlA.php" method="post">
            <h1>Cadastrar Aulas</h1> 
                <input class="login-input" type="text" name="content" placeholder="Digite o nome" required>
                <select required class="login-input" name="subject">
                    <option selected="true" disabled="disabled">Selecione a matéria dessa aula</option>
                    <?php
                    
                        $sql = "SELECT * FROM `subject`";
                        $num = mysqli_query($conexao, $sql);
                    
                        while($linha = mysqli_fetch_assoc($num)){
                            if($linha['nome'] != "Todas"){
                                echo "<option name=\"subject\">".$linha["nome"]."</option>";
                            }
                        }
                    ?>
                </select>
                <input class="login-input btn" type="submit" name="acao" value="Cadastrar Aula!" >
            </form>
        </div>
    </section>

    <a href="../SOS DelRey/">Ver as perguntas</a>

</body>
</html>