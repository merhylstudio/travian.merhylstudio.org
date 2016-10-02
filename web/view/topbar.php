<div class="container-fluid bg-nightblue topbar">
  <form class="form-horizontal" method="post" action="#" role="form">
    <div id="options" style="display:none;">
      <div class="form-group">
          <div class="col-md-12">
              <legend>Options</legend>
          </div>
      </div>
    </div>
  <div class="form-group col-md-4">
      <button type="button" class="btn btn-default" onclick="toggleOptions()" id="toggleOptionsButton">Afficher les options</button>
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