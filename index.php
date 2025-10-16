<?php
// página pessoal: ana laura
// template "Astral" do site HTML5 UP (personalizado)

// informações principais
$nome = "Ana Laura Barboza Oliveira dos Santos";
$descricao = "Estudante de Sistemas da Informação (CIn-UFPE). Página pessoal criada para a disciplina de Desenvolvimento de Software.";
$github = "https://github.com/analauraboliveira/";

// uso de $_GET para saudação personalizada
$mensagemVisitante = "";
if (isset($_GET["visitante"]) && $_GET["visitante"] != "") {
    $visitante = htmlspecialchars($_GET["visitante"]);
    $mensagemVisitante = "Olá, $visitante! 😊 Seja bem-vindo(a)!";
} else {
    $mensagemVisitante = "Olá, visitante! Digite seu nome na URL assim: <br><code>?visitante=Maria</code>";
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
				<a href="<?php echo $github; ?>" target="_blank" class="icon solid fa-folder"><span>GitHub</span></a>
			</nav>

			<!-- conteúdo principal -->
			<div id="main">

				<!-- home -->
				<article id="home" class="panel intro">
					<header>
						<h1><?php echo $nome; ?></h1>
						<p><?php echo $descricao; ?></p>
						<hr>
						<p class="saudacao"><?php echo $mensagemVisitante; ?></p>
					</header>
					<a href="<?php echo $github; ?>" target="_blank" class="jumplink pic">
						<img src="uploads/foto.jpeg" alt="Foto de perfil" />
					</a>
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
