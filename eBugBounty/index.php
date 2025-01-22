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
    <meta property="og:title" content="Interescolare">
    <meta property="og:site_name" content="Interescolare">
    <meta property="og:description" content="Rede social de compartilhamento de eventos escolares">
    <meta property="og:url" content="https://interescolare.com">
    <meta property="og:image" content="https://interescolare.com/favicon/símbolo.png">
    <meta property="og:image:type" content="image/png">
    <title>Interescolare Bug Bounty</title>
    <link rel="canonical" href="www.interescolare.com" />
    <link rel="stylesheet" href="../style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../favicon/símbolo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <style>
        @media screen and (max-width:768px){
            .left{
                margin: 0 auto !important;
            }
            
            .right{
                width: 100%!important;
                flex-wrap: wrap;
            }
            .right li{
                width: 100%!important;
                float: none!important;
            }

            .rigth li a{
                width: 100%!important;
                text-align: center!important;
            }

            .center a {
                width: 100%!important;
                margin: 10px 0px 10px 0px!important;
                text-align: center!important;
            }

            .center a.user{
                margin: 10px 0 auto !important;
            }

            .center span{
                margin: 0 auto !important;
                width: 100% !important;
            }
        }
    </style>
    <header class="navbar hover">
        <div class="center">
            <div class="left">
                <a href="../private/posts.php"><img src="../favicon/símbolo.png" alt="Interescolare"></a>
            </div>
            <div class="right">
                <li><a href="../private/cadastrar.php">Cadastrar evento</a></li>
                <li><a href="../private/conversas.php">Conversas</a></li>  
                <li><a href="../private/contact.php">Contato</a></li>
            </div>
            <a class="user" href="../private/user.php" style="margin-left: 20px;"><img src="../private/upload/download.png" height="60" width="60" style="border-radius: 50px;"></a>
        </div>
    </header>
    <div id="cadastro">
        <h2>Cadatrar um Bug</h2>  
        <form class="form-cadastro" method="post" action="process.php">
            <input name="title" placeholder="Digite o título do seu report" type="text" class="cadastro-input">
            <textarea name="report" placeholder="Digite o seu report" class="cadastro-input textarea" cols="30" rows="10"></textarea>
            <input type="submit" value="Cadastrar Report" class="cadastro-btn">
        </form>
    </div>

    <section class="rank">
        <div class="container">
            <div class="row">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Pontos</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        
                            $sql = "SELECT * FROM `user` ORDER BY points DESC";
                            $num = mysqli_query($conexao, $sql);
                        
                            while($linha = mysqli_fetch_assoc($num)){
                                if($linha["points"] != 0){
                                    echo "<tr>
                                        <td>".$linha['nome']."</td>
                                        <td>".$linha['points']."</td>
                                    </tr>";
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <br><br>
</body>
</html>