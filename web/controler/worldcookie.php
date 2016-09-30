<?php
include_once('controler/serverlist.php');

function SetActiveWorld($world, $country)
{
  if (!WorldExist($world, $country)) return false;
  
  setcookie("world", $world, time()+240);
  setcookie("country", $country, time()+240);
  return true;  
}

function GetActiveWorld()
{
  if (isset($_COOKIE["world"]))
  {
    $new_world = $_COOKIE["world"];
    if (isset($_COOKIE["country"]))
    {
      $new_country = $_COOKIE["country"];
    }
  }
  // default
  
  if (!isset($new_country)) $new_country = "";
  if (!isset($new_world)) $new_world = "";
  
  if (!WorldExist($new_world, $new_country)) return array("ts4", "fr");

  return array($new_world, $new_country);
}

?>