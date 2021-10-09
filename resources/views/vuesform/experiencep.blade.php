<div>
    <fieldset class="form-group">
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="datedebut">Debut</label>
                <input id="datepickerdebutexp" name="debutexp" class="form-control" required>
                
            </div>

            <div class="form-group col-md-4">
                <label for="datefin">Fin</label>
                <input id="datepickerfinexp" name="finexp" class="form-control" required>
                
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="poste">Poste</label>
                <input type="text" name="poste" id="poste" class="form-control" placeholder="DataScientist " required>
            </div>

            <div class="form-group col-md-4">
                <label for="detail">Detail</label>
                <textarea class="form-control" name="detail" id="detail" rows="8" placeholder="Donner des details sur votre traivail"></textarea>
            </div>
            
        </div>

        @if ($displayexp1)
            @include('vuesform.formpart.exppart')
        @endif

        <div class="form-group ">
            <button type="button" wire:click="addexp" style="margin-left: 300px" class="btn btn-danger" style="font-weight: bold"> <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z"/>
              </svg> Ajouter une Experience professionnelle
            </button> </span>
        </div>
    </fieldset>
</div>

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