

<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-
scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
	
    <link href="{{ asset('assets/css/stylecv4.css') }}" rel="stylesheet"  type="text/css">
	<link href="{{ asset('assets/css/stylecv.css') }}" rel="stylesheet"  type="text/css">
    <title>Arnauld CV</title>
</head>

<body>
    <div class="bouton">
        <p><a href="{{ route('modele2') }}" class="btn btn-danger">Retour</a></p>
    </div>
    <div class = "container main">
    <div class="container">
        <div class="row">
            <div class="photo row  col-12  ">
                <div class="col-2"></div>
                <h1 class=" col-lg-4 col-md-4 col-sm-12 col-xs-12">Djedjemel Arnauld Cyriaque Esso</h1>
                <div class=" col-lg-2 col-md-4 col-sm-12 col-xs-12 photo">
                    <img src="photo.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <section class=" col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <div class="profile">
                    <h1><i class="fa fa-user"></i> Profil </h1>
                    <ul>
                        <li>Née le 09-11-2000 à Abobo</li>
                        <li>Nationalité : Ivoirienne</li>
                        <li>Celibataire</li>
                    </ul>
                    <ul id="contact">
                        <li> <span class="fa fa-phone"></span> <a href="+225 89 814 333" target="blank" >+225 89 814 333</a> </li>
                        <li> <span class="fa fa-envelope"></span><a href=" mailto:cyriaquearnauld@gmail.com" target="blank" >cyriaquearnauld@gmail.com</a> </li>
                        <li> <span class="fas fa-map-marker-alt"></span> <a href="https://www.google.com/maps/place/Coll%C3%A8ge+Carnot/@5.3219334,-4.1050944,18.5z/data=!4m12!1m6!3m5!1s0xfc1c1a3975a439d:0x551f51916d793969!2sCarrefour+Jatak!8m2!3d5.3217688!4d-4.1034398!3m4!1s0xfc1c1a3d10bc48b:0x23044b0671eea02!8m2!3d5.3210244!4d-4.1047622" target="blank" >Côte d'Ivoire Abidjan Yopougon Niangon à droite</a></li>
                        <li> <span class="fa fa-facebook-square"></span><a href="https://www.facebook.com/arnauld.cyriaque" target="blank" >arnauld cyriaque</a></li>
                    </ul>
                </div>
                <div class="skills">
                    <h1><i class="fa fa-cogs"></i>Competences</h1>
                    <ul>
                        <li>
                            <h3>Developpeur web</h3>
                            <!-- <div class="progress">
                                <div class="progress-bar  progress-bar-striped active " role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">80%</div>
                            </div> -->
                        </li>
                        <li>
                            <h3>Bases de donnees</h3>
                            <!-- <div class="progress">
                                <div class="progress-bar  progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">40%</div>
                            </div> -->
                        </li>
                        <li>
                            <h3>Concepteur d'application</h3>
                            <!-- <div class="progress">
                                <div class="progress-bar  progress-bar-striped active" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">90%</div>
                            </div> -->
                        </li>
                        <!-- <li>
                            <h3>administrateur reseau</h3>
                            <div class="progress">
                                <div class="progress-bar  progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">40%</div>
                            </div> 
                        </li> -->
                        <!-- <li>
                            <h3> Web Design</h3>
                            <div class="progress">
                                <div class="progress-bar  progress-bar-striped active" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">50%</div>
                            </div> 
                        </li> -->
                        <li>
                            <h3>C/C++</h3>
                            <!-- <div class="progress">
                                <div class="progress-bar  progress-bar-striped active" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">70%</div>
                            </div> -->

                        </li>
                    </ul>
                </div>
                <div class="langue">
                    <h1> <i class="fa fa-language"></i> Langue</h1>
                    <ul>
                        <li>
                            <h3>Anglais(Moyen)</h3>
                            <!-- <div class="progress">
                                <div class="progress-bar  progress-bar-striped active" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="10" style="width: 65%;">6/10</div>
                            </div> -->
                        </li>
                        <li>
                            <h3>Francais(Professionnel)</h3>
                            <!-- <div class="progress">
                                <div class="progress-bar  progress-bar-striped active" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="10" style="width: 95%">9/10
                                </div>
                            </div> -->
                        </li>
                    </ul>
                </div>
            </section>
            <aside class=" col-lg-7 col-md-7 col-sm-12 col-xs-12">
                <div class="education ">
                    <h1><i class="fa fa-graduation-cap"></i>Formation</h1>
                    <ul>
                        <li>
                            <h2>Diplome d'Etude Universitaire (DEUG) 2 Informatique<strong>2016-2018</strong></h2>
                            <p>Universite Nangui Abrogoua d'Abobo-Adjame, Côte d'Ivoire<br> UFR Sciences Fondamentales Appliquées <small>SFA</small>
                                <br>Aspect theorique et pratique de l'informatique au travers des paradigmes de programmation comme les bases de données,l'algorithme                            </p>
                        </li>
                        <li>
                            <h2>Baccalauréat(BAC)  <strong class="third">2015-2016</strong></h2>
                            <p>Cours Secondaire Methodiste de Niangon à droite <small>CSM</small> <br> serie C </p>
                        </li>
                    </ul>
                </div>
                <div class="loisirs">
                    <h1><i class="fa fa-basketball-ball"></i>Loisirs</h1>
                    <ul>
                        <li>BasketBall</li>
                        <li>FootBall</li>
                        <li>E-Game</li>
                        <li>Lecture</li>
                    </ul>
                </div>
            </aside>
        </div>
    </div>
    </div>

    <div style="margin-top: 50px; margin-left: 45%;">
		<a href="{{ route('formulaire') }}" class="center1">Choisir</a>
	</div>

	<div style="margin-top: 50px; margin-left: 90%;">
		<a href="{{ route('modele4') }}" class="center2">Modèle Suivant</a>
	</div>
</body>

</html>
