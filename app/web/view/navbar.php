<nav class="container-fluid navbar navbar-default navbar-fixed-top">

  <div class="navbar-header">

    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="http://travian.merhylstudio.org">
      <span class="fa fa-search"></span></a>
  </div>

  <div class="collapse navbar-collapse" id="navbar">
    <ul class="nav navbar-nav">
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Serveur
          <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
<?php
include_once './controler/worldcookie.php';

$server_list = GetWorldList();
$ret = GetActiveWorld();
$world = $ret[0];
$country = $ret[1];

echo 'world: '.$world.'<br />country: '.$country;

foreach ($server_list as $c => $country_server_list)
{
  foreach ($country_server_list as $w)
  {
            echo '<li><a href="inactives.php?w='.$w.'&c='.$c.'"><img class="flag" src="view/img/flags/'.$c.'.png"> '.$w.'</a></li>'.PHP_EOL;
  }
}
?>
        </ul>
      </li>
      <li><a href="inactives.php">Inactifs</a></li>
      <li><a href="tools.php">Outils</a></li>
      <li><a href="help.php">Aide</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
    </ul>
  </div>

</nav>
