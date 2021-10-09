<div>
    <fieldset class="form-group">
        <div class="form-row">
            <div class="form-group col-md-7">
                <label for="nomloisir">Nom</label>
                <input type="text" name="nomloisir" id="loisir" class="form-control" placeholder="Jeux vidéo" required>
            </div>
        </div>
        @if ($displayloisir1)
            @include('vuesform.formpart.loisirpart')
        @endif
        <div class="form-group ">
            <button type="button" wire:click="addloisir" style="margin-left: 300px" class="btn btn-danger"> <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z"/>
              </svg> Ajouter un Loisir
            </button> </span>
        </div>
    </fieldset>
</div>