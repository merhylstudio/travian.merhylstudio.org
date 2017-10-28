<?php
class Village
{
  public __construct ($tid, $x, $y, $tid, $vid, $villageName, $uid, $userName, $aid, $alianceName, $pop)
  {
    $this->$tid = $tid;
    $this->$x = $x;
    $this->$y = $y;
    $this->$tid = $tid;
    $this->$vid = $vid;
    $this->$villageName = $villageName;
    $this->$uid = $uid;
    $this->$userName = $userName;
    $this->$aid = $aid;
    $this->$allianceName = $allianceName;
    $this->$pop = $pop;
  }
  
  public var $tid;
  public var $x;
  public var $y;
  public var $tid;
  public var $vid;
  public var $villageName;
  public var $uid;
  public var $userName;
  public var $aid;
  public var $allianceName;
  public var $pop;
}