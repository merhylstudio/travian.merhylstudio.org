<?php

class Inactive
{
  public static function get($world, $x, $y, $dmin, $dmax, $pmin, $pmax)
  {
    $recherche = SPDO::getInstance()->query("SELECT x,y,uid,accountname,tid,villagename,aid,alliancename,population
                                               FROM ".$world."_village
                                               WHERE inactive>0
                                                 AND POW(x-".$x.",2)+POW(y-".$y.",2)<POW(".$dmax.",2)
                                               ORDER BY POW(x-".$x.",2)+POW(y-".$y.",2);");
    return $recherche->fetchAll();
  }
}
