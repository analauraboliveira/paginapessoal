<?php
// página pessoal: ana laura
// template "Astral" do site HTML5 UP (personalizado)

// informações principais
$nome = "Ana Laura Barboza Oliveira dos Santos";
$descricao = "Estudante de Sistemas da Informação (CIn-UFPE). Página pessoal criada para a disciplina de Desenvolvimento de Software.";
$github = "https://github.com/analauraboliveira/";
$emailDestino = "albos@cin.ufpe.br";

// processamento do contato 
$mensagemStatus = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nomeVisitante = $_POST["nome"];
    $emailVisitante = $_POST["email"];
    $mensagemVisitante = $_POST["mensagem"];

    $assunto = "Mensagem de contato do site pessoal";
    $corpo = "Nome: $nomeVisitante\nE-mail: $emailVisitante\n\nMensagem:\n$mensagemVisitante";

    // tentar enviar email 
    if (mail($emailDestino, $assunto, $corpo, "From: $emailVisitante")) {
        $mensagemStatus = "Obrigada, $nomeVisitante! Sua mensagem foi enviada com sucesso. 💌";
    } else {
        $mensagemStatus = "Ops! Não foi possível enviar o e-mail. 😔";
    }
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo $nome; ?> — Página Pessoal</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="style.css" />
	</head>
	<body class="is-preload">

		<!-- estrutura principal -->
		<div id="wrapper">

			<!-- navegação -->
			<nav id="nav">
				<a href="#home" class="icon solid fa-home"><span>Home</span></a>
				<a href="#contact" class="icon solid fa-envelope"><span>Contact Me</span></a>
				<a href="<?php echo $github; ?>" target="_blank" class="icon solid fa-folder"><span>GitHub</span></a>
			</nav>

			<!-- conteúdo principal -->
			<div id="main">

				<!-- home -->
				<article id="home" class="panel intro">
					<header>
						<h1><?php echo $nome; ?></h1>
						<p><?php echo $descricao; ?></p>
					</header>
					<a href="#contact" class="jumplink pic">
						<img src="uploads/foto.jpeg" alt="Foto de perfil" />
					</a>
				</article>

				<!-- contato -->
				<article id="contact" class="panel">
					<header>
						<h2>Contact Me</h2>
					</header>
					<form method="post" action="#contact">
						<div>
							<div class="row">
								<div class="col-6 col-12-medium">
									<input type="text" name="nome" placeholder="Nome" required />
								</div>
								<div class="col-6 col-12-medium">
									<input type="email" name="email" placeholder="E-mail" required />
								</div>
								<div class="col-12">
									<textarea name="mensagem" placeholder="Digite sua mensagem" rows="6" required></textarea>
								</div>
								<div class="col-12">
									<input type="submit" value="Enviar Mensagem" />
								</div>
							</div>
						</div>
					</form>

					<?php if ($mensagemStatus != "") { ?>
						<p class="mensagem-status"><?php echo $mensagemStatus; ?></p>
					<?php } ?>
				</article>

			</div>

			<!-- rodapé -->
			<div id="footer">
				<p>
					© 2025 — Desenvolvido por <?php echo $nome; ?><br>
					<small>Com base no template <a href="https://html5up.net/astral" target="_blank">Astral</a> de <a href="https://html5up.net" target="_blank">HTML5 UP</a>.</small>
				</p>
			</div>
		</div>

		<!-- template -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/browser.min.js"></script>
		<script src="assets/js/breakpoints.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>
	</body>
</html>
