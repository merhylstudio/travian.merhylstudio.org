<div class="container-fluid bg-nightblue">
<?php
$server_list = GetServerList();
var_dump($server_list);

foreach ($server_list as $country => $country_server_list)
{  
  foreach ($country_server_list as $server)
  {
            echo '<p>'.$country.' '.$server.'</p>'.PHP_EOL;
  }
}
?>
</div>