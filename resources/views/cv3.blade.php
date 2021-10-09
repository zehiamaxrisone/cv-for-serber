
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV de
        DJEDJE  Junior    </title>
    <link rel="stylesheet" href="{{ asset('assets/css/stylecv3.css') }}" type="text/css">
	<link href="{{ asset('assets/css/stylecv.css') }}" rel="stylesheet"  type="text/css">

</head>
<body>
    <header>
        <div class="conteneur-Monimg">
            {{-- <img class="img" src="photo.jpg" alt="DJEDJE  Junior "> --}}
            <img src="{{ Storage::url($personne->image->path) }}" alt="photo" class="img-circle img float-left center" width="170px">
        </div>
        <div class="presentation">
            @foreach ($personne as $pre)
                {{ $pre->nom }}
            @endforeach 
            @foreach ($personne as $pre)
                {{ $pre->prenom }}
            @endforeach      </div>
       
        <div class="info">
             <br>
        @foreach ($personne as $pre)
        {{ $pre->date2naiss }}
    @endforeach <br>
    @foreach ($personne as $pre)
        {{ $pre->lieu2naiss }}
    @endforeach  <br> 
    tel:            
    @foreach ($personne as $pre)
        {{ $pre->tel }}
    @endforeach
    <br>email: @foreach ($personne as $pre)
    {{ $pre->email }}
    @endforeach<br>       </div>
    </header>

    <div class="moi">
        @foreach ($personne as $pre)
        {{ $pre->infosup }}
    @endforeach
    </div>
    <div class="body">
                <div class="cursus">
                        <div class="entete">
                                Cursus Scolaire
                        </div>
                        @foreach($cur AS $cu) 
                        				<div class="element">
					<h4>
                         De {{ $cu->debut }} à {{ $cu->fin }}				</h4>
					<p>
						<strong>
							{{ $cu->diplome }}						</strong>: 
						<span>
							{{ $cu->niveau }}						</span><br>
											</p>
				</div>
                        @endforeach


                <div class="Competences">
                    <div class="entete">
                        Competences
                    </div>
                    				<div class="element">
					<h4>
						@foreach ($com as $comp)
                            {{ $comp->nom }}
                        @endforeach  					</h4>
					<h4>
						Langue					</h4>
					<ul>
                        @foreach ($lg as $lgs)
                        {{ $lgs->nomlangue }} {{  $lgs->niveau }} 
                    @endforeach    					</ul>
				</div>
			                </div>
                <div class="Loisir">
                        <div class="entete">
                                Loisirs
                        </div>
                        <div class="element">

                            <ul>
                                @foreach($lois As $ls):   
    
                                <li>  {{ $ls->nomloisir }}   </li>
                                    
                                @endforeach;   
                                
                            </ul>				
                        </div>
			    
                </div>
    </div>

</body>
<footer>
                        <p class="copyright">Copyright 2020 - @foreach ($personne as $pre)
                            {{ $pre->nom }}
                        @endforeach </p>

                        <div style="margin-top: 50px; margin-left: 90%;">
                            <a href="{{ route('cv4') }}" class="center2">Modèle Suivant</a>
                        </div> 
</footer>

</html>