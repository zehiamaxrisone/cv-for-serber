<div>
    <fieldset class="form-group">
        <div class="form-row">
            <div class="form-group col-md-7">
                <label for="nomentrep">Nom</label>
                <input type="text" name="nomentrep" id="nomentrep" class="form-control" placeholder="Max_Lab">
            </div>
        </div>
        
        @if ($displayentreprise1)
            @include('vuesform.formpart.entreprisepart')
        @endif
        <div class="form-group ">
            <button type="button" wire:click="addentreprise" style="margin-left: 300px" class="btn btn-danger"> <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z"/>
              </svg> Ajouter une Entreprise
            </button> </span>
        </div>
    </fieldset>
</div>