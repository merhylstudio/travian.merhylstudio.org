<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Accueil</title>
<?php include 'view/header.php'; ?>
</head>
<body id="topPage">

<!-- navbar -->
<?php include 'view/navbar.php'; ?>

<?php    
  if (isset($_POST["submit"]))
  {
    if(isset($_POST["sx"]))  { $sx  = $_POST["sx"];  setcookie("sx",  $sx,  time()+864000); } else $sx  = 0;
    if(isset($_POST["sy"]))  { $sy  = $_POST["sy"];  setcookie("sy",  $sy,  time()+864000); } else $sy  = 0;
    if(isset($_POST["sdl"])) { $sdl = $_POST["sdl"]; setcookie("sdl", $sdl, time()+864000); } else $sdl = 0;
    if(isset($_POST["sdh"])) { $sdh = $_POST["sdh"]; setcookie("sdh", $sdh, time()+864000); } else $sdh = 60;
    if(isset($_POST["spl"])) { $spl = $_POST["spl"]; setcookie("spl", $spl, time()+864000); } else $spl = 0;
    if(isset($_POST["sph"])) { $sph = $_POST["sph"]; setcookie("sph", $sph, time()+864000); } else $sph = 1500;
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
    <div class="col-sm-2 col-sm-offset-2">
        <label class="control-label">Peuples:</label>
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
  include_once './controler/classLoader.php';
  echo '<div class="container-fluid bg-lightblue">'.PHP_EOL;

  $ret = Inactive::get($world, $sx, $sy, $sdl, $sdh, $spl, $sph);
//  var_dump($ret);
  # Affichage
  echo '<div class="col-xs-10 col-xs-offset-1">'.PHP_EOL;
  echo '<table border=1 class="table table-bordered table-condensed table-hover">'.PHP_EOL;
  echo '<thead>
  <tr>
    <th class="text-center">x</th>
    <th class="text-center">y</th>
    <th>Village</th>
    <th>Joueur</th>
    <th>Alliance</th>
    <th><span class"fa fa-search logo"></span></th>
  </tr>
</thead>
<tbody>'.PHP_EOL;

  foreach ($ret as $it)
  {
    echo '<tr>';

    // Position
    echo '<td class="text-center">'.$it['x'].'</td>';
    echo '<td class="text-center">'.$it['y'].'</td>';

    // Village
    echo '<td><a target="_blank" href="http://'.$world.'.travian.'.$country.'/position_details.php?x='.$it['x'].'&y='.$it['y'].'">'.utf8_encode($it['villagename']).'</a></td>';

    // Peuple
    if     ($it['tid'] == 1) echo '<td class="murRomain">';
    elseif ($it['tid'] == 2) echo '<td class="murGermain">';
    elseif ($it['tid'] == 3) echo '<td class="murGaulois">';
    elseif ($it['tid'] == 5) echo '<td class="murNatar">';

    // Joueur
    echo '<a class="peuple" target="_blank" href="http://'.$world.'.travian.'.$country.'/spieler.php?uid='.$it['uid'].'">&#32;'.utf8_encode($it['accountname']).'</a></td>';

    // Alliance
    echo '<td><a target="_blank" href="http://'.$world.'.travian.'.$country.'/allianz.php?aid='.$it['aid'].'">'.utf8_encode($it['alliancename']).'</a></td>';

    // Population
    echo '<td>'.$it['population'].'<span class"fa fa-search logo"></span></td>';

    echo '</tr>'.PHP_EOL;
  }
  echo '</tbody></table>'.PHP_EOL;
  echo '</div>'.PHP_EOL;

  echo '</div>'.PHP_EOL;
}
else
{
  echo '<div class="container-fluid bg-lightblue">'.PHP_EOL;
  
  echo '<h3>Recherche d\'inactif</h3><p>Entrez vos critères de recherche</p>'.PHP_EOL;
  
  echo '</div>'.PHP_EOL;
}
?>

<!-- footer -->
<?php include 'view/footer.php'; ?>

<!-- JavaScript -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- Scripts perso -->
<script type="text/javascript" src="view/js/smoothscroll.js"></script>
<script type="text/javascript" src="view/js/tooltip.js"></script>

</body>
</html>