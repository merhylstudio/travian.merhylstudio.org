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
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Server
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
<?php
include_once("./controler/serverlist.php");
$server_list = GetServerList();
foreach ($server_list as $country => $country_server_list)
{
  foreach ($country_server_list as $server)
  {
            echo '<li><a href="#"><img class="flag" src="view/img/flags/'.$country.'.png"> '.$server.'</a></li>'.PHP_EOL;
  }
}
?>
          </ul>
        </li>
      <li><a href="#">Tools</a></li>
      <li><a href="#">Help</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
    </ul>
  </div>
  
</nav>
