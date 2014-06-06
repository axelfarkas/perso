<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Dia - Troyes</title>

	<link href='http://fonts.googleapis.com/css?family=Lato:300,700,700italic' rel='stylesheet' type='text/css'>
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	
	<link rel="stylesheet" href="/css/normalize.css">
	<link rel="stylesheet" href="/css/style.css">
	<script type="text/javascript" src="/script.js"></script>
</head>
<body>

	<header id="header">
		<h1>
			<a href="http://<?=$_SERVER['HTTP_HOST']?>">
				<img src="/img/logo.png" alt="Dia Troyes" width="150">
			</a>
		</h1>
		<h2 id="intro">
			Bienvenue sur le site <br>
			de votre magasin <span class="text-red">DIA</span>
		</h2>
		
		Horaires d'ouverture :
		<ul>
			<li>- Lun. au Ven.: 8h30 - 19h30</li>
			<li>- Dim.: 8h30 - 12h30</li>
		</ul>
		
	</header>

	<div id="container" class="clearfix">
		{{content}}
	</div>

	<footer class="bg-red center">
		Copyrights 2014 - DIA 5 - 7, rue Traversot 10000 Troyes - <a href="mailto:contact@dia-troyes.fr">contact@dia-troyes.fr</a>
	</footer>
	
</body>
</html>