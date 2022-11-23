<?php
// ceil問題
  $x = 2.4;
  echo ceil($x);

// floor問題
  $x = 6.9;
  echo floor($x);


// round問題
  $x = 99.9;
  echo round($x);

// pi問題
  echo pi();
  echo "<br/>";
  function circleArea($r){
    $circle_area = $r * $r * pi();
    echo $circle_area;
  }

  circleArea(6);

// mt_rand問題
  echo mt_rand(34, 58);

// strlen問題
  $str = "potatoandburger";
  echo strlen($str);

// strpos問題
  $str = "keisukehonda";
  echo strpos($str, "e");

// substr問題
  $str = "keisukehonda";
  echo substr($str, -4, 3);

// str_replace問題
  $str = "keisukehonda";
  echo str_replace("nda", "NDA", $str);

// printf問題
  $name = "本田圭佑";
  $uniform_number = 10;

  printf("%sのミラン時代の背番号は%dです", $name, $uniform_number);

// sprintf問題
  $limit_hour = 7;
  $limit_minute = 6;
  printf("残りの試合時間は%02d時間%02d分", $limit_hour, $limit_minute);
  echo "<br>";
  $limit_time = sprintf("残りの試合時間は%02d時間%02d分", $limit_hour, $limit_minute);
  echo $limit_time;

?>