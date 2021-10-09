

<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-
scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="{{ asset('assets/css/stylecv4.css') }}" rel="stylesheet"  type="text/css">
	<link href="{{ asset('assets/css/stylecv.css') }}" rel="stylesheet"  type="text/css">
    <title>@foreach ($personne as $pre)
        {{ $pre->prenom }}
    @endforeach CV</title>
</head>

<body>
    <div class="bouton">
        <p><a href="" class="btn btn-danger">Retour</a></p>
    </div>
    <div class = "container main">
    <div class="container">
        <div class="row">
            <div class="photo row  col-12  ">
                <div class="col-2"></div>
                <h1 class=" col-lg-4 col-md-4 col-sm-12 col-xs-12">@foreach ($personne as $pre)
                    {{ $pre->prenom }}
                @endforeach
                @foreach ($personne as $pre)
                        {{ $pre->nom }}
                    @endforeach 
            </h1>
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
                        <li>Née le @foreach ($personne as $pre)
                            {{ $pre->date2naiss }}
                        @endforeach  à @foreach ($personne as $pre)
                        {{ $pre->lieu2naiss }}
                    @endforeach </li>
                    </ul>
                    <ul id="contact">
                        <li> <span class="fa fa-phone"></span> <a href="+225 89 814 333" target="blank" >@foreach ($personne as $pre)
                            {{ $pre->tel }}
                        @endforeach </a> </li>
                        <li> <span class="fa fa-envelope"></span><a href=" mailto:cyriaquearnauld@gmail.com" target="blank" >amail: @foreach ($personne as $pre)
                            {{ $pre->email }}
                        @endforeach </a> </li>
                        <li> <span class="fas fa-map-marker-alt"></span> <a href="https://www.google.com/maps/place/Coll%C3%A8ge+Carnot/@5.3219334,-4.1050944,18.5z/data=!4m12!1m6!3m5!1s0xfc1c1a3975a439d:0x551f51916d793969!2sCarrefour+Jatak!8m2!3d5.3217688!4d-4.1034398!3m4!1s0xfc1c1a3d10bc48b:0x23044b0671eea02!8m2!3d5.3210244!4d-4.1047622" target="blank" >@foreach ($personne as $pre)
                            {{ $pre->liee2naiss }}
                        @endforeach </a></li>
                        <li> <span class="fa fa-facebook-square"></span><a href="https://www.facebook.com/arnauld.cyriaque" target="blank" >@foreach ($personne as $pre)
                            {{ $pre->nom }}
                        @endforeach
                        @foreach ($personne as $pre)
                        {{ $pre->renom }}
                    @endforeach  </a></li>
                    </ul>
                </div>
                <div class="skills">
                    <h1><i class="fa fa-cogs"></i>Competences</h1>
                    <ul>
                        <li>
                            <h3>@foreach ($com as $comp)
                                {{ $comp->nom }}
                            @endforeach </h3>
                                 
                        </li>
                    </ul>
                </div>

                <div class="langue">
                    <h1> <i class="fa fa-language"></i> Langue</h1>
                    <ul>
                        <li>
                            <h3>@foreach ($lg as $lgs)
                            {{ $lgs->nomlangue }} {{  $lgs->niveau }} 
                        @endforeach </h3>
                            <!-- <div class="progress">
                                <div class="progress-bar  progress-bar-striped active" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="10" style="width: 65%;">6/10</div>
                            </div> -->
                        </li>
                    </ul>
                </div>
            </section>
            <aside class=" col-lg-7 col-md-7 col-sm-12 col-xs-12">
                <div class="education ">
                    <h1><i class="fa fa-graduation-cap"></i>Formation</h1>
                    <ul>
                        @foreach($cur AS $cu) 
                        <li>
                            <h2>{{ $cu->diplome }}<strong>{{ $cu->debut }} - {{ $cu->fin }}</strong></h2>
                            <p>{{ $cu->niveau }} 
                        </li>
                        @endforeach
                    </ul>
                </div>

                <div class="loisirs">
                    <h1><i class="fa fa-basketball-ball"></i>Loisirs</h1>
                    <ul>
                        @foreach($lois As $ls):   

                            <li>  {{ $ls->nomloisir }}   </li>
                                
                        @endforeach
                    </ul>
                </div>
            </aside>
        </div>
    </div>
    </div>

    <div style="margin-top: 50px; margin-left: 90%;">
        <a href="{{ route('cv5') }}" class="center2">Modèle Suivant</a>
    </div> 
</body>

</html>
