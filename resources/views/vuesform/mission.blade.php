<div>
    <fieldset class="form-group">
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="debutmission">Debut</label>
                <input id="datepickerdebutmission" name="debutmission" class="form-control">
                
            </div>

            <div class="form-group col-md-4">
                <label for="finmission">Fin</label>
                <input id="datepickerfinmission" name="finmission" class="form-control">
               
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="nommission">Nom</label>
                <input type="text" name="nommission" id="nom" class="form-control">
            </div>

            <div class="form-group col-md-4">
                <label for="nomtechnologie">Technologie</label>
                <input type="text" name="nomtechnologie" id="technologie" class="form-control">
            </div>
        </div>
        @if ($displaymission1)
            @include('vuesform.formpart.missionpart')
        @endif
        <div class="form-group ">
            <button type="button" wire:click="addmission" style="margin-left: 300px" class="btn btn-danger"> <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z"/>
              </svg> Ajouter une Mission
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