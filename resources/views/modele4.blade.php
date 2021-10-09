

<!DOCTYPE html>
<html>
<head>
	<title>CV Tuo Adama</title>
	<meta charset="utf-8">
	<link href="{{ asset('assets/css/stylecv.css') }}" rel="stylesheet"  type="text/css">

	
	<style type="text/css">
	
		.contenu
		{
			font-weight: bold;
			border:3px skyblue solid;
			padding: 10px;
			box-shadow:10px 10px 3px black;
			border-radius:7px;
			width: 60%;
			margin-left: 20%;
		}
		.entete
		{
			margin-bottom: 10%;
		}
		img
		{
			width: 113px;
			height:151px;
		}
		.image
		{
			
			display: inline-block;
			position: relative;
			right: 2%;
			float: right;
		}
		.presentation
		{
			display: inline-block;
			position: relative;
			float: left;
			padding: 10px;
			bottom: 10px;
			
		}

		strong
		{
			color: rgb(151,0,38);
		}
		span
		{
			float: right;
		}
		h3
		{
			border :3px solid skyblue;
			padding: 06px;
			background-color: skyblue;
			border-radius: 10px;
		}
		h2
		{
			/*border:1px black solid;*/
			text-align: center;
			width: 30%;
			margin-left: 30%;
		}
		@media screen and (max-width: 1150px)
		{
			.contenu
				{
					display: block;
					width: 96%;
					margin: auto;
					text-align: center;
				}
				.entete
				{
				margin-bottom: 10%;
				}
				.image
				{
					float: right;
					top: -2%;
				}
				.presentation
				{
					float: left;
					top: 15%;
				}
				.niveau
				{
					display: inline-block;
					right: auto;
					top: 3%;
					text-align: center;
				}
				h2
				{
					text-align: center;
					width: 50%;
					margin-left: 30%;
				}
		}
	</style>
</head>

	<body>
		<div class="contenu">
			<div class="entete">
				<div class="presentation">
					<strong>Adama Tuo</strong><br>
					<strong> 1998-06-28</strong><br>
					Abobo Pk 18<br>
					+225 88 17 75 87<br>
					+225 44 49 76 75 <br>
					tuoadama17@gmail.com<br>
					Groupe : 29			</div>
				<div class="image">
					<img src="photo.jpg">
				</div>
			</div>
			<h2>Etudiant, <br>
			Licence 3 informatique</h2>
			<div class="corps">
				<h3>FORMATIONS :</h3>
				<div class="formation">
					<p><strong>2017-2018 : </strong>Licence 2 Maths-infos</p>
					<p><strong>2016-2017 : </strong>Licence 1 Maths-infos</p>
					<p><strong>2015-2016 : </strong>Baccalaureat Série D</p>
				</div>
				<h3>COMPETENCES :</h3>
				<div class="comptence">
					<p><strong> Informatiques : </strong> 
						Programmation :C, Java, (PHP/Mysql), C++, HTML/CSS <br>
					Infographie: Photoshop, GIMP</p>
					<p><strong>Mathématiques : </strong>  Algebre 3, Analyse 3</p>
					<p><strong>Gestion : </strong>  Gestion des stock</p>
				</div>
				<h3>ACTIVITES ET LOISIRS :</h3>
				<div class="loisir">
					<p><strong>Francais :</strong> Pratique courante</p>
					<p><strong>Anglais : </strong> Niveau moyen</p>
					<p><strong>Allemand :</strong> Niveau moyen</p>
					<p> <strong>Sports : </strong> Football, Natation</p>
				</div>
			</div>
		</div>

		<div style="margin-top: 50px; margin-left: 45%;">
			<a href="{{ route('formulaire') }}" class="center1">Choisir</a>
		</div>
	</body>
</html>