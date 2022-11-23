<?php
    $testFile = "test.txt";
    $contents = "さかなクン！";
  
    if (is_writable($testFile)){
      $fp = fopen($testFile, "a");
      fwrite($fp, $contents);
      fclose($fp);
      echo "finish writable!!";
    } else {
      echo "not writable!!";
      exit;
    }  

  $testFile = "test2.txt";

  if (is_readable($testFile)){
    $fp = fopen($testFile, "r");
    while ($line = fgets($fp)){
      echo $line."<br>";
    }
    fclose($fp);
  } else {
    echo "not readable!";
    exit;
  }

?>