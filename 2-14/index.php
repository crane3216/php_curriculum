<?php
// count問題
  $members = ["tomoya", "sho", "hikaru", "ryota", "riku", "toki"];
  echo count($members);

// sort問題
  $team = ["tomoya", "sho", "hikaru", "ryota", "riku", "toki"];
  sort($team);
  var_dump($team);

// in_array問題
  $supporters = ["tomoya", "sho", "hikaru", "ryota", "riku", "toki"];
  if (in_array("tomoya", $supporters)){
    echo "ともや君が存在するよ";
  } else {
    echo "ともやは存在しないよ";
  }

// implode問題
  $fruits = ["apple", "orange", "peach", "grape"];
  $atstr = implode("・", $fruits);
  var_dump($atstr);

// explode問題
  $animals = ["dog", "cat", "zebra", "tiger"];
  $atstr = implode("・", $animals);
  var_dump($atstr);
  echo "<br>";
  $re_animals = explode("・", $atstr);
  var_dump($re_animals);
?>