<!DOCTYPE html>


<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name = "viewport" content = "width = device-width, initial-scale = 1">
        <link rel = "stylesheet" href = "bootstrap/css/bootstrap.min.css" >
        <script src = "jquery-3.5.1.min.js" > </script>
        <script src = "bootstrap/js/bootstrap.min.js"> </script>

        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <link href="fonts/css/all.css" rel="stylesheet">

        <link href="{{ asset('assets/css/stylecv.css') }}" rel="stylesheet"  type="text/css">
        
        <title>CV de Risone
        </title>
    </head>


    <body>

        <div>
            <h1 class="text-danger text-center" style="margin: 70px">Modèle 1</h1>
        </div>

        <div class="Main container">

            <!---------------------------- HEADER ----------------------------------->

            <div>
                <div class=" container divphoto">
                    {{-- <img src="photo.jpg" alt="photo" class="img-circle float-left center" width="170px"> --}}
                    <img src="{{ asset('assets/img/bg-01.jpg') }}" alt="photo de profil">
                    <p> Max </p>
                    <p> Hernadez </p>
                </div>

                <span class="barre"> </span>

                <div class="cercle1"></div>

                <div class="description"> <p class="profil">Profil</p>Jeune Etudiant de nationnalité Russe, je suis à la recherche <br>d'un emploi  dans le 
                    dommaine de  l'informtique plus precisement <br> celui du developpement WEB. Fortement motivé 
                    afin de participer <br> à la construction de la plus part des projets qui me serons confiés, <br>
                    Je suis prêt à relever de nouveaux défis au sein d'une société de <br> technologie à forte croissance
                    qui me permettra de combiner ma <br> créativité et mes compétences techniques en developpement WEB. 
                </div>


                <div class="triangle"></div>
            </div>

            <!----------------------------- A PROPOS DE MOI --------------------------->

 
            <div class="divapopos">
                <h2><i class="fas fa-address-card"></i> A propos de moi </h2>
                <ul class="ul1">
                    
                    
                    <li>Nationnalité: Russe </li>
                    <li> C&eacute;libataire sans enfant</li>
                    <li> Directeur en Secrité des Systemes</li>
                </ul>
                <h3>Contact </h3>
                <ul class="ul2">
                    <li><i class="fas fa-envelope-square"></i>
                        Mickael@gmail.com
                    </li>
                    <li>
                        <i class="fas fa-mobile"></i>&ensp; 0745124585
                    </li>
                    <li>
                        <i class="fab fa-facebook-f"></i>&ensp; Mickaekfb
                    </li>
                    <li>
                        <i class="fab fa-google"></i>&ensp;  Hernadez
                    </li>
                </ul>

            </div>

            <span class="barre2"> </span>

            <div class="cercle2"></div>
            
            

            <!--------------------------------- FORMATION --------------------------------------->

            <section class="divformation">
                @php
                    $cursusScolaire = ['cursus 1', 'cursus 2']
                @endphp
                <h2><i class="fas fa-user-graduate"></i> Formation</h2>

                    @foreach($cursusScolaire AS $k) 
                        <h4>
                              {{ $k }}
                        </h4>
                        <p>
                            <strong>
                                    formation1  <br>
                            </strong>
                                  formation2  <br>
                                  formation3 
                        </p>
                    @endforeach 
            </section>


            <!-------------------------- LANGUES -------------------------------->


            <section class="sectionlangue">
                <h2><i class="fas fa-language"></i> Langues</h2>

                <ul>
                    <li>
                          Anglais    (Bon niveau)
                    </li>
                    <li>
                          Russe   (Moyen)
                    </li>
                    <li>
                          Francais    (Moyen)
                    </li>
                    <li>
                          Espagnol  
                    </li>
                </ul>
        
            </section>

            <span class="barre3"> </span>

            <div class="cercle"></div>

            <!------------------------------- COMPETENCES -------------------------------------->

            <section class="sectioncompetences">
                @php
                    $competences = ["Business Inteligence","Business Inteligence","Informatique","Informatique"];
                @endphp
                <h2> <i class="fas fa-users-cog"></i> Competences</h2>

                <ul> 
                    @foreach ($competences as $comp)
                        <li>
                            {{ $comp }}
                        </li>
                    @endforeach
                    
                    
                </ul>

            </section>


            <!-------------------------------------- LOISIRS ------------------------------------------>

            <section class="sectionloisirs">
                @php
                    $Loisirs = ['Jeux', 'Basket'] 
                @endphp
                
                    <h2><i class="fab fa-playstation"></i> Loisirs</h2>
                    <ul>
                            @foreach($Loisirs As $k)  

                            <li>  {{ $k }}   </li>
                                
                            @endforeach   
                            
                    </ul>
            </section>

            <span class="barre4"> </span>

            <div class="cercle"></div>

            <!-------------------------------- EXPERIENCES PROFESSIONNELLES ----------------------------->

            <section class="sectionexperience">
                @php
                    $experienceProfessionnelles = ['Cours à domiciles']
                @endphp
                <h2><i class="fas fa-sort-alpha-up-alt"></i> Experiences Professionnelles</h2>
                
                    @foreach($experienceProfessionnelles AS $k)
                        <h4>
                              {{ $k }}
                        </h4>

                        <ul>
                                    
                            @php
                                $missions = ['mission1', 'mission2']
                            @endphp
                            @foreach($missions AS $item)   
                                <li class="liexp">  {{ $item }}   </li>
                            @endforeach
                              
                        </ul>
			        @endforeach
            </section>

            
        
        </div>

        <div style="margin-top: 50px; margin-left: 45%;">
            <a href="{{ route('formulaire') }}" class="center1">Choisir</a>
        </div>

        <div style="margin-top: 50px; margin-left: 90%;">
            <a href="{{ route('modele2') }}" class="center2">Modèle Suivant</a>
        </div>
        
        <a href="{{ route('cv2') }}">CV2</a>
        
        
        
    </body>

    <footer></footer>


</html>

