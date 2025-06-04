<!DOCTYPE HTML>

<html>
	<head>
		<title>produit electronique</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="asse/css/main.css" />
		<noscript><link rel="stylesheet" href="asse/css/noscript.css" /></noscript>
        <style type="text/css">
        .animateuse{
      animation:leelaanimate 0.5s infinite;
      position: relative;
      bottom: 120px;
      left: 370px;
      font-size: 90px;
      -webkit-text-stroke: 10px rgb(102, 102, 105);
      -webkit-text-stroke-color: rgb(107, 107, 104);
      -webkit-text-stroke-width: 2px;
      -webkit-text-size-adjust:none;
      font-family:"sweety rasty" ;
      width: 470px;
      }
	  
	  body{
         background-image: url(/imag/eza.png);
       }
        </style>
	</head>
	<body class="is-preload">

			<div id="wrapper">
					<header id="header">
						<div class="logo">
							<span class="icon fa-gem"></span>
						</div>
						<div class="content">
							<div class="inner">
								<h1>Quaincallerie</h1>
                                <h2>Welcome, {{ Auth::user()->name }}</h2>
								<p>Découvrez notre gamme complète d'outils et de matériaux de construction de haute qualité chez Quincaillerie Pro. Profitez de nos offres exceptionnelles et de notre service client expert pour tous vos projets de bricolage et de rénovation </p>
                                <p>Cliquez le bouton en bas</p>
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="/voiture">matériel pour la voiture</a></li>
								<li><a href="/maison">matériel pour la maison</a></li>
								<li><a href="/electrique">matériel pour l'électronique</a></li>
								<li><a href="/materiel">Autres matériaux</a></li>
                                <li><a href="/dashboard">dashboard</a></li>
								
							</ul>
						</nav>
					</header>

					<div id="main">
					</div>
					

			</div>

	
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="asse/js/jquery.min.js"></script>
			<script src="asse/js/browser.min.js"></script>
			<script src="asse/js/breakpoints.min.js"></script>
			<script src="asse/js/util.js"></script>
			<script src="asse/js/main.js"></script>

	</body>
</html>
