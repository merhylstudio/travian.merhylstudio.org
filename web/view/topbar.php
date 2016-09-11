<div class="container-fluid bg-nightblue topbar">
  <form class="form-horizontal" method="post" action="#" role="form">
    <div id="options" style="display:none;">
      <div class="form-group">
          <div class="col-md-12">
              <legend>Options</legend>
          </div>
      </div>
      <div class="form-group">
        <div class="col-md-2">
            <label class="control-label">Recherche de zone</label>
            <span class="glyphicon glyphicon-question-sign"></span>
        </div>
        <div class="col-md-2">
            <div class="input-group">
                <span class="input-group-addon">x</span>
                <input type="text" class="form-control" name="zonal_sx" id="zonal_sx" placeholder="haut-gauche" >
            </div>
        </div>
        <div class="col-md-2">
            <div class="input-group">
                <span class="input-group-addon">y</span>
                <input type="text" class="form-control" name="zonal_sy" id="zonal_sy" placeholder="haut-gauche" >
            </div>
        </div>
        <div class="col-md-2 col-md-offset-1">
            <div class="input-group">
                <span class="input-group-addon">x</span>
                <input type="text" class="form-control" name="zonal_dx" id="zonal_dx" placeholder="bas-droit" >
            </div>
        </div>
        <div class="col-md-2">
            <div class="input-group">
                <span class="input-group-addon">y</span>
                <input type="text" class="form-control" name="zonal_dy" id="zonal_dy" placeholder="bas-droit" >
            </div>
        </div>
      </div>
    </div>
  <div class="form-group col-md-4">
      <button type="button" class="btn btn-default" onclick="toggleOptions()" id="toggleOptionsButton">Afficher les options</button>
      <button type="submit" class="btn btn-default">Rechercher</button>
  </div>
  <script type="text/javascript">
function toggleOptions() {
  $("#options").slideToggle(function() {
    if ($("#options").is(":visible")) {
      $("#toggleOptionsButton").html("Masquer les options");
    } else {
      $("#toggleOptionsButton").html("Afficher les options");
    }
  });
}
  </script>
  </form>
</div>