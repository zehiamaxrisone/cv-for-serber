<div>
    <fieldset class="form-group">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="datedebut">Debut</label>
                <input id="datepickerdebutcursus" name="debutcursus" class="form-control" required>
               
            </div>

            <div class="form-group col-md-6">
                <label for="datefin">Fin</label>
                <input id="datepickerfincursus" name="fincursus" class="form-control" required>
                
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="diplome">Diplome</label>
                <input type="text" name="diplome" id="diplome" class="form-control" required>
            </div>

            <div class="form-group col-md-6">
                <label for="niveau">Niveau</label>
                <input type="text" name="niveau" id="niveau" class="form-control" required> 
            </div>
        </div>

            {{-- @includeWhen($displaycursus1, 'vuesform.formpart.cursuspart')
            
            @each('vuesform.formpart.cursuspart', , 'variable', 'view.empty') --}}

            @foreach ($table as $tab)
                @include('vuesform.formpart.cursuspart')
            @endforeach

        <div class="form-group ">
            <button type="button" wire:click="essaie" style="margin-left: 300px" class="btn btn-danger"> <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z"/>
              </svg> Ajouter une Cursus
            </button> </span>
        </div>

        <div class="form-group ">
            <button type="button" wire:click="removet" style="margin-left: 300px" class="btn btn-danger"> <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z"/>
              </svg> Effacrer le cursus
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