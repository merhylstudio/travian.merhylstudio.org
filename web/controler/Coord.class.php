<?php

class Coord
{
  public function __construct($x = 0, $y = 0)
  {
    $this->$x = $x;
    $this->$y = $y;
  }
  
  public function get()
  {
    return array($x, $y);
  }
  
  public function getX()
  {
    return $x;
  }
  public function getY()
  {
    return $y;
  }

  var $x;
  var $y;
}