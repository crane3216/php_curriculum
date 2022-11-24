<?php
  $x = 0;
  $i = 0;
  while ($x < 40) {
    $i++;
    $s = rand(1,6);
    echo $i . "回目=" . $s . "<br>";
    $x += $s;
  }
  echo "合計" . $i . "回でゴールしました";
?>