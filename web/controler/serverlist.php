<?php

function GetServerList()
{
  $ret = yaml_parse_file('../config/servers.yml');
  
  return $ret;
}

function CheckIfServerExist($server, $nation)
{
  $servers = GetServerList();
  
  if (!in_array($server, $servers[$nation])) return false;
  
  return true;  
}