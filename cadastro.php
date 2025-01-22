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
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>      
    <link rel="shortcut icon" href="./favicon/símbolo.png" type="image/x-icon">
</head>
<body>
    <section id="cadastro">
        <h2>Cadastrar sua conta</h2>
        <form class="form-cadastro" method="post" action="./process/cadastro.php">
            <input type="text" name="username" placeholder="Nome de usuário" class="cadastro-input primeira">
            <input type="email" name="email" placeholder="Email" class="cadastro-input">
            <input type="password" name="pwd" placeholder="Senha" class="cadastro-input">
            <input class="input-box" name="checkbox" type="checkbox" value="termos de uso" required/><a class="btn btn-outline-success" data-toggle="modal" data-target="#addUsuarioModal" style="background: transparent; color:#007bff; text-decoration: underline; border:none;">Termos de uso e política de privacidade</a>
            <input type="submit" value="Cadastrar" class="cadastro-btn">
            <a class="cadastro" href="./">Já tem um login</a>
        </form>
        <div id="addUsuarioModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="modal-title" id="addUsuarioModalLabel">Termos de Uso</h3>
						<button style="outline: none;" type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span style="outline: none;" aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
                        <div class="termos">
                            <li>Essa rede social tem objetivo único de <b>divulgação de eventos escolares</b>;</li>
                            <br>
                            <li>Todos os item da barra da navegação são redirecionaveis</li>
                            <li>Ao entrar selecione alguma matéria que aparecerá os eventos da mesma</li>
                            <li>Proibidos nomes impróprios (Palavrões, Insinuações, Preconceito, Racismo, Homofobia);</li>
                            <li>Apologia ao crime, à violência, ao preconceito, invasão de privacidade;</li>
                            <li>Só podem ser compartilhados eventos escolares;</li>
                            <li>Não podem ser postadas coisas que firam a constituição e conteúdos adultos;</li>
                            <li>O descumprimento de qualquer um dos termos acima acarretará na exclusão da conta;</li>
                            <br>
                            <li>Nós não nos responsabilizamos por qualquer invasão que acarrete em roubo de dados;</li>
                            <li>Nós garantimos a segurança do usuário por meio da criptografia;</li>
                            <li>Nós coletamos somente seu nome, email e senha pelo formulário de cadastro;</li>
                            <li>As informações não serão em hipótese alguma divulgadas à terceiros;</li>
                            <li>Seu nome e sua senha serão guardadas em um banco de dados e criptografadas, porém o email não possui criptografia para um possível contato se ocorrer o descumprimento dos termos de uso;</li>
                            <li>Nós usamos cookies para o armazenamento de sua sessão de usuário e com o id de seu usuário;</li>
                            <li>Essa rede social é indicada para pessoas de no mínimo 10 anos de idade e direcionada para o público estudantil;</li>
                            <li>Não podem ser alteradas as credenciais de usuário;</li>
                            <li>Qualquer alteração na política de privacidade você será avisado;</li>
                            <b><li style="font-size: 20px;">Contas criadas com o mesmo email serão passivas de exclusão;</li></b>
                        </div>
					</div>
				</div>
			</div>
		</div>
    </section>
</body>
</html>