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
        @livewireStyles
        
        <title>CV de @foreach ($personne as $pre)
            {{ $pre->prenom }}
        @endforeach
        </title>
    </head>


    <body>

        <div class="Main container">

            <!---------------------------- HEADER ----------------------------------->

            <div>
                <div class=" container divphoto">
                    <img src="{{ Storage::url($personne->image->path) }}" alt="photo" class="img-circle float-left center" width="170px">
                    <p> @foreach ($personne as $pre)
                        {{ $pre->prenom }}
                    @endforeach </p>
                    <p> @foreach ($personne as $pre)
                        {{ $pre->nom }}
                    @endforeach </p>
                </div>

                <span class="barre"> </span>

                <div class="cercle1"></div>

                <div class="description">
                    @foreach ($personne as $pre)
                        {{ $pre->infosup }}
                    @endforeach 
                </div>


                <div class="triangle"></div>
            </div>

            <!----------------------------- A PROPOS DE MOI --------------------------->

 
            <div class="divapopos">
                <h2><i class="fas fa-address-card"></i> A propos de moi </h2>
                <ul class="ul1">
                    
                    
                    <li> C&eacute;libataire sans enfant</li>
                    <li> Directeur en Secrité des Systemes</li>
                </ul>
                <h3>Contact </h3>
                <ul class="ul2">
                    <li><i class="fas fa-envelope-square"></i>
                        @foreach ($personne as $pre)
                            {{ $pre->email }}
                        @endforeach 
                    </li>
                    <li>
                        <i class="fas fa-mobile"></i>&ensp; 
                        @foreach ($personne as $pre)
                            {{ $pre->tel }}
                        @endforeach 
                    </li>
                    <li>
                        <i class="fab fa-facebook-f"></i>&ensp; ''
                    </li>
                    <li>
                        <i class="fab fa-google"></i>&ensp;  ''
                    </li>
                    <li>
                        <i class="fas fa-fax"></i>&ensp; '';
                    </li>
                </ul>

            </div>

            <span class="barre2"> </span>

            <div class="cercle2"></div>
            
            

            <!--------------------------------- FORMATION --------------------------------------->

            <section class="divformation">
                <h2><i class="fas fa-user-graduate"></i> Formation</h2>

                    @foreach($cur AS $cu) 
                        <h4>
                              De {{ $cu->debut }} à {{ $cu->fin }}
                        </h4>
                        <p>
                            <strong>
                                    {{ $cu->niveau }}  <br>
                            </strong>
                                  {{ $cu->diplome }}  <br>
                        </p>
                    @endforeach;  
            </section>


            <!-------------------------- LANGUES -------------------------------->


            <section class="sectionlangue">
                <h2><i class="fas fa-language"></i> Langues</h2>

                <ul>
                    <li>
                        @foreach ($lg as $lgs)
                            {{ $lgs->nomlangue }} {{  $lgs->niveau }} 
                        @endforeach         
                    </li>
                    <li>
                          'Russe'   (Moyen)
                    </li>
                    <li>
                          'Francais'    (Moyen)
                    </li>
                    <li>
                          'Espagnol'   
                    </li>
                </ul>
        
            </section>

            <span class="barre3"> </span>

            <div class="cercle"></div>

            <!------------------------------- COMPETENCES -------------------------------------->

            <section class="sectioncompetences">
                <h2> <i class="fas fa-users-cog"></i> Competences</h2>

                <ul>
                    <li>
                        @foreach ($com as $comp)
                            {{ $comp->nom }}
                        @endforeach  
                    </li>
                    <li>
                         "Business Inteligence"
                    </li> 
                    <li>
                        "Informatique"
                    </li>
                    <li>
                        "Informatique"
                    </li>  
                    <li>
                        "Informatique"
                    </li>
                    <li>
                        "Informatique"
                    </li>
                    <li>
                        "Informatique"
                    </li>
                    <li>
                        "Informatique"
                    </li>
                    
                </ul>

            </section>


            <!-------------------------------------- LOISIRS ------------------------------------------>

            <section class="sectionloisirs">
                
                    <h2><i class="fab fa-playstation"></i> Loisirs</h2>
                    <ul>
                            @foreach($lois As $ls):   

                            <li>  {{ $ls->nomloisir }}   </li>
                                
                            @endforeach;   
                            
                    </ul>
            </section>

            <span class="barre4"> </span>

            <div class="cercle"></div>

            <!-------------------------------- EXPERIENCES PROFESSIONNELLES ----------------------------->

            <section class="sectionexperience">
                <h2><i class="fas fa-sort-alpha-up-alt"></i> Experiences Professionnelles</h2>
                
                    @foreach($exp AS $experience)
                        <h4>
                              De {{ $experience->debut }} à {{ $experience->fin }}
                        </h4>

                        <h4>
                              {{ $experience->poste }} 
                        </h4>
                        <h3>
                            {{ $experience->detail }}
                        </h3>
			        @endforeach;  

                    <h2><i class="fas fa-sort-alpha-up-alt"></i>Mission</h2>

                    @foreach ($mission as $mi)
                        <h4>
                            De {{ $mi->debut }} à {{ $mi->fin }}
                        </h4>
                        <h4>
                            {{ $mi->nom }} 
                        </h4>
                        <h3>
                            {{ $mi->technologie }}
                        </h3>
                    @endforeach
            </section>

            <div style="margin-top: 50px; margin-left: 90%;">
                <a href="{{ route('cv3') }}" class="center2">Modèle Suivant</a>
            </div>    
        
        </div>
        
        @livewireScripts
        
    </body>

    <footer></footer>


</html>