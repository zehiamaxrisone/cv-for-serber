<div>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-dark bg-primary">
            <div class="col-md-4 mr auto">
                <a class="navbar-brand" href="#">Cirriculum vitae</a>
            </div>
            <div class="col md-4 ml-auto mr-auto" style="padding-left: 240px">
                <span class="text-center" style="font-size: 17px">
                    CV de <span style="font-size: 20px; color: white; font-weight: bold;" wire:model="nom">{{ $nom }}</span>  
                </span>
            </div>
            <a href="{{ route('index') }}" class="nav-link" style="color: #ffffff">Acceuil</a>
            <a href="{{ route('modele') }}" class="nav-link" style="color: #ffffff">Modele</a>
        </nav>
    </div>

          



    {{-- /////////////////////////////////////////////////////////////////////////////////////////////// --}}

    <div class="text-danger text-center" style="margin: 70px;">
        <h1 style="font-weight: bold">Veuiller remplir le formulaire d'information</h1>
        <a href="{{ route('modele') }}" class="retour"> Voir le modèle choisit</a>
    </div>


    <form class="container-fluid col-sm-7 border rounded mt-4 p-4" method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
        @csrf

        <h3 style="font-size: 28px; color: red; font-weight: bold;">Etat civil <span> <button type="button" wire:click="etatcivilselect" style="margin-left: 300px" class="btn btn-primary"> <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
            <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z"/>
          </svg></button> </span></h3>

          @if ($displayetatcivil)
              @include('vuesform.etatcivil')
          @endif
        
        <div style="height: 1.5px; background-color: grey; margin-top: 30px; margin-bottom: 30px; border-radius: 2px; opacity: 0.5"></div>  

        <h3 style="font-size: 28px; color: red; font-weight: bold;"> Etablissement <span> <button type="button" wire:click="etablissementselect" style="margin-left: 280px"  class="btn btn-primary"> <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
            <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z"/>
          </svg></button> </span></h3>

          @if ($displayetab)
              @include('vuesform.etablissement')
          @endif

        

        <div style="height: 1.5px; background-color: grey; margin-top: 30px; margin-bottom: 30px; border-radius: 2px; opacity: 0.5"></div>

        <h3 style="font-size: 28px; color: red; font-weight: bold;"> Cursus <span> <button type="button" wire:click="cursusselect" style="margin-left: 323px"  class="btn btn-primary"> <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
            <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z"/>
          </svg></button> </span></h3>

          @if ($displaycursus)
              @include('vuesform.cursus')
          @endif

        <div style="height: 1.5px; background-color: grey; margin-top: 30px; margin-bottom: 30px; border-radius: 2px; opacity: 0.5"></div>


        <h3 style="font-size: 28px; color: red; font-weight: bold;"> Experience Professionnelle <span> <button type="button" wire:click="expselect" style="margin-left: 108px"  class="btn btn-primary"> <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
            <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z"/>
          </svg></button> </span></h3>

          @if ($displayexp)
              @include('vuesform.experiencep')
          @endif

        <div style="height: 1.5px; background-color: grey; margin-top: 30px; margin-bottom: 30px; border-radius: 2px; opacity: 0.5"></div>

        <h3 style="font-size: 28px; color: red; font-weight: bold;"> Domaine <span> <button type="button" wire:click="domaineselect" style="margin-left: 300px"  class="btn btn-primary"> <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
            <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z"/>
          </svg></button> </span></h3>

          @if ($displaydomaine)
              @include('vuesform.domaine')
          @endif

        <div style="height: 1.5px; background-color: grey; margin-top: 30px; margin-bottom: 30px; border-radius: 2px; opacity: 0.5"></div>

        <h3 style="font-size: 28px; color: red; font-weight: bold;"> Entreprise <span> <button type="button" wire:click="entrepriseselect" style="margin-left: 340px"  class="btn btn-primary"> <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
            <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z"/>
          </svg></button> </span></h3>

          @if ($displayentreprise)
              @include('vuesform.entreprise')
          @endif

        <div style="height: 1.5px; background-color: grey; margin-top: 30px; margin-bottom: 30px; border-radius: 2px; opacity: 0.5"></div>

        <h3 style="font-size: 28px; color: red; font-weight: bold;"> Langue <span> <button type="button" wire:click="langueselect" style="margin-left: 325px"  class="btn btn-primary"> <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
            <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z"/>
          </svg></button> </span></h3>

          @if ($displaylangue)
              @include('vuesform.langue')
          @endif

        <div style="height: 1.5px; background-color: grey; margin-top: 30px; margin-bottom: 30px; border-radius: 2px; opacity: 0.5"></div>

        <h3 style="font-size: 28px; color: red; font-weight: bold;"> Loisir <span> <button type="button" wire:click="loisirselect" style="margin-left: 400px"  class="btn btn-primary"> <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
            <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z"/>
          </svg></button> </span></h3>

          @if ($displayloisir)
              @include('vuesform.loisir')
          @endif

        <div style="height: 1.5px; background-color: grey; margin-top: 30px; margin-bottom: 30px; border-radius: 2px; opacity: 0.5"></div>

        <h3 style="font-size: 28px; color: red; font-weight: bold;"> Compétence <span> <button type="button" wire:click="competenceselect" style="margin-left: 260px"  class="btn btn-primary"> <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
            <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z"/>
          </svg></button> </span></h3>

          @if ($displaycompetence)
              @include('vuesform.competence')
          @endif

        <div style="height: 1.5px; background-color: grey; margin-top: 30px; margin-bottom: 30px; border-radius: 2px; opacity: 0.5"></div>

        <h3 style="font-size: 28px; color: red; font-weight: bold;"> Mission <span> <button type="button" wire:click="missionselect" style="margin-left: 380px"  class="btn btn-primary"> <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"  font-weight="bold" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
            <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z"/>
          </svg></button> </span></h3>

          @if ($displaymission)
              @include('vuesform.mission')
          @endif

        <div class="form-row">
            <button type="submit" class="btn btn-primary container-fluid col-sm-7 border rounded mt-4 p-4 buton" style="font-size: 25px; letter-spacing: 2px;">
                Terminer
            </button>
        </div>
    </form>

          




    {{-- /////////////////////////////////////////////////////////////////////////////// --}}


    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>

    <script>
        $(function() {
            $( "#datepickernaiss" ).datepicker();
        });
    </script>
    <script>
        $(function() {
            $( "#datepickerdebutcursus" ).datepicker();
        });
    </script>
    <script>
        $(function() {
            $( "#datepickerfincursus" ).datepicker();
        });
    </script>
    <script>
        $(function() {
            $( "#datepickerdebutexp" ).datepicker();
        });
    </script>
    <script>
        $(function() {
            $( "#datepickerfinexp" ).datepicker();
        });
    </script>
    <script>
        $(function() {
            $( "#datepickerdebutmission" ).datepicker();
        });
    </script>
    <script>
        $(function() {
            $( "#datepickerfinmission" ).datepicker();
        });
    </script>
</div>
