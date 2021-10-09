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
        <input type="text" name="poste" id="poste" class="form-control" placeholder="DataScientist">
    </div>

    <div class="form-group col-md-4">
        <label for="detail">Detail</label>
        <textarea class="form-control" name="detail" id="detail" rows="8" placeholder="Donner des details sur votre traivail"></textarea>
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