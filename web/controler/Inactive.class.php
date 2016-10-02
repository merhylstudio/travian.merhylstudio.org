<?php 

class Inactive
{
  public static function getInactive($world, $x, $y, $dmin, $dmax, $pmin = 0, $pmax = 1500)
  {
    $recherche = SPDO::getInstance()->query("SELECT x,y,accountname,villagename,alliancename,population 
                                               FROM ".$world."_village 
                                               WHERE inactive>0 
                                                 AND POW(x-".$x.",2)+POW(y-".$y.",2)<POW(".$distance.",2)
                                               ORDER BY POW(x-".$x.",2)+POW(y-".$y.",2);");
    $ret = array();
    
    while($result = $recherche->fetch())
    {
      array_push($ret, $result);
    }
    
    return ret;
  }
}