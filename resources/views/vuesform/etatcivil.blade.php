<div>
    <fieldset class="form-group">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" name="nometatcivil" id="nom" placeholder="Nom" required wire:model="nom">
            </div>
            <div class="form-group col-md-6">
                <label for="prenom">Prénom</label>
                <input type="text" class="form-control" name="prenometatcivil" id="prenom" placeholder="Max" required>  
            </div>
        </div>
        <div class="form-row">
        <div class="form-group col-md-3">
            <label for="date2naiss">Date de naissance</label>
            <input id="datepickernaiss" name="datenaiss" class="form-control" placeholder="27/01/2001" required>
            
        </div>
        <div class="form-group col-md-4">
            <label for="lieu2naiss">Lieu de naissance</label>
            <input type="text" name="lieunaiss" class="form-control" id="lieu2naiss" placeholder="Gagnoa" required>
        </div>

        <div class="form-group col-md-4">
            <label for="avatar">Choississez votre photo</label>
            <input type="file" name="avatar" class="form-control" id="avatar">
        </div>
    </fieldset>

    <div style="height: 1.5px; background-color: grey; margin-top: 30px; margin-bottom: 30px; border-radius: 2px; opacity: 0.5"></div>

    <fieldset class="form-group">
        <legend style="font-size: 24px; color: red; font-weight: bold;" style="font-size: 18px; color: red;">Description</legend>
        <div class="form-group">
            <div class="form-outline w-80">
                <textarea class="form-control" name="description" id="infosup" rows="8" placeholder="Faite une breve description de vous"></textarea>
            </div>
        </div>
    </fieldset>

    <fieldset class="form-group">
        <legend style="font-size: 24px; color: red; font-weight: bold;">Contacts</legend>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
                <label for="tel">Téléphone</label>
                <input type="text" name="telephone" class="form-control" id="tel" placeholder="Téléphone">
            </div>
        </div>
    </fieldset>

    <div style="height: 1.5px; background-color: grey; margin-top: 30px; margin-bottom: 30px; border-radius: 2px; opacity: 0.5"></div>

    <fieldset class="form-group">
        <legend style="font-size: 24px; color: red; font-weight: bold;">Création de Compte</legend>
        <div class="form-row">
            <div class="form-group col-md- 5">
                <label for="username">Nom d'utilisateur</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="MrMax61">
            </div>
            <div class="form-group col-md-5">
                <label for="password">Mot de passe</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="mot de passe">
            </div>
        </div>
    </fieldset>

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