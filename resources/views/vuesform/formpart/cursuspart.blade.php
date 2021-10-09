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