<?php

function GetWorldList()
{
  $ret = yaml_parse_file('../config/servers.yml');

  return $ret;
}

function WorldExist($world, $country)
{
  $world_list = GetWorldList();


  foreach ($world_list as $c => $country_world_list)
  {
    if (in_array($world, $country_world_list) AND $c == $country)
      return true;
  }
  
  return false;
}
