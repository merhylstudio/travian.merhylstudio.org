<?php    
  if (isset($_POST["submit"]))
  {
    if(isset($_POST["sx"]))  { $sx  = $_POST["sx"];  setcookie("sx",  $sx,  time()+240); } else $sx  = 0;
    if(isset($_POST["sy"]))  { $sy  = $_POST["sy"];  setcookie("sy",  $sy,  time()+240); } else $sy  = 0;
    if(isset($_POST["sdl"])) { $sdl = $_POST["sdl"]; setcookie("sdl", $sdl, time()+240); } else $sdl = 0;
    if(isset($_POST["sdh"])) { $sdh = $_POST["sdh"]; setcookie("sdh", $sdh, time()+240); } else $sdh = 60;
    if(isset($_POST["spl"])) { $spl = $_POST["spl"]; setcookie("spl", $spl, time()+240); } else $spl = 0;
    if(isset($_POST["sph"])) { $sph = $_POST["sph"]; setcookie("sph", $sph, time()+240); } else $sph = 1500;
  }
  else
  {
    if(isset($_COOKIE["sx"]))  $sx  = $_COOKIE["sx"];  else $sx  = 0;
    if(isset($_COOKIE["sy"]))  $sy  = $_COOKIE["sy"];  else $sy  = 0;    
    if(isset($_COOKIE["sdl"])) $sdl = $_COOKIE["sdl"]; else $sdl = 0;
    if(isset($_COOKIE["sdh"])) $sdh = $_COOKIE["sdh"]; else $sdh = 60;    
    if(isset($_COOKIE["spl"])) $spl = $_COOKIE["spl"]; else $spl = 0;
    if(isset($_COOKIE["sph"])) $sph = $_COOKIE["sph"]; else $sph = 1500;
  }
?>

<div class="container-fluid bg-nightblue searchform">
  <form class="form-horizontal" method="post" action="#" role="form">
  <div class="form-group">
      <div class="col-md-12">
          <legend>Recherche d'inactifs</legend>
      </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 col-sm-offset-2">
        <label class="control-label">Origine:</label>
    </div>
    <div class="col-xs-5 col-xs-offset-1 col-sm-2 col-sm-offset-0">
        <div class="input-group">
            <span class="input-group-addon">x</span>
            <input type="text" class="form-control" name="sx" id="sx" value="<?php echo $sx; ?>" >
        </div>
    </div>
    <div class="col-xs-5 col-sm-2">
        <div class="input-group">
            <span class="input-group-addon">y</span>
            <input type="text" class="form-control" name="sy" id="sy" value="<?php echo $sy; ?>" >
        </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 col-sm-offset-2">
        <label class="control-label">Distance:</label>
    </div>
    <div class="col-xs-5 col-xs-offset-1 col-sm-3 col-sm-offset-0">
        <div class="input-group">
            <span class="input-group-addon">min</span>
            <input type="text" class="form-control" name="sdl" id="sdl" value="<?php echo $sdl; ?>" >
        </div>
    </div>
    <div class="col-xs-5 col-sm-3">
        <div class="input-group">
            <span class="input-group-addon">max</span>
            <input type="text" class="form-control" name="sdh" id="sdh" value="<?php echo $sdh; ?>" >
        </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2 col-sm-offset-2">
        <label class="control-label">Population:</label>
    </div>
    <div class="col-xs-5 col-xs-offset-1 col-sm-3 col-sm-offset-0">
        <div class="input-group">
            <span class="input-group-addon">min</span>
            <input type="text" class="form-control" name="spl" id="spl" value="<?php echo $spl; ?>" >
        </div>
    </div>
    <div class="col-xs-5 col-sm-3">
        <div class="input-group">
            <span class="input-group-addon">max</span>
            <input type="text" class="form-control" name="sph" id="sph" value="<?php echo $sph; ?>" >
        </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-xs-4 col-xs-offset-1 col-sm-2 col-sm-offset-4">
      <button type="submit" class="btn btn-default" name="submit">Rechercher</button>
    </div>
  </div>
  </form>
</div>

<?php
if (isset($_POST["submit"]))
{
  include_once '../controler/classLoader.php';
  echo '<div class="container-fluid bg-lightblue">'.PHP_EOL;



  echo '</div>'.PHP_EOL;
}
?>