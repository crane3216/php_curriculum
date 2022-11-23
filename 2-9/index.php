<?php
  for ($i = 1; $i <= 100; $i++){
    if ($i % 15 === 0){
      echo "FizzBuzz". "<br />";
      continue;
    } elseif ($i % 3 === 0){
      echo "Fizz". "<br />";
      continue;
    } elseif ($i % 5 === 0){
      echo "Buzz". "<br />";
      continue;
    }
    echo $i. "<br />";
  }
?>