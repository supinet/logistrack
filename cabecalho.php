<?php
function carregaClasse($nomeDaClasse) {
	require_once ("class/" . $nomeDaClasse . ".php");
}
spl_autoload_register ( "carregaClasse" );

error_reporting ( E_ALL ^ E_NOTICE );
require_once ("mostra-alerta.php");
?>

<html>
<head>
<meta charset="utf-8">
<title>suplaycargo</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/style.css">
<meta name="viewport" content="width=device-width" />
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target="#navbar" aria-expanded="false"
					aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">suplaycargo</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Início</a></li>
					<li><a href="#">Opções</a></li>
					<li><a href="#">Perfil</a></li>
					<li><a href="#">Ajuda</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div id="main" class="container-fluid">

		<div>
		<?php
		mostraAlerta ( "success" );
		mostraAlerta ( "danger" );
		?>