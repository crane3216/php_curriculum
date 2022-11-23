<?php
  function getRectangularArea($length, $height, $width){
    $area = $length * $width * $height;
    print "直方体の面積は".$area."です。";
  }

  getRectangularArea(5, 10, 8);
?>