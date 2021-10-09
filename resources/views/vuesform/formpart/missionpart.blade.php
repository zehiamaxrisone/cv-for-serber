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