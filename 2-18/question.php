<link rel="stylesheet" href="question.css">

<?php
  $name = $_POST["name"];
  $number = [80, 22, 20, 21];
  $word = ["PHP", "Python", "JAVA", "HTML"];
  $command = ["join", "select", "insert", "update"];
  $answer1 = $number[0];
  $answer2 = $word[3];
  $answer3 = $command[1];

?>
<div class="contents">
  <p>お疲れ様です<?php echo $name; ?>さん</p>
  <form action="answer.php" method="post">
  <h2>①ネットワークのポート番号は何番？</h2>
    <?php foreach($number as $value1) { ?>
      <input type="radio" name="number">
      <?php echo $value1;
    }
    ?>
  <h2>②Webページを作成するための言語は？</h2>
  <?php foreach($word as $value2) { ?>
      <input type="radio" name="word">
      <?php echo $value2;
    }
    ?>
  <h2>③MySQLで情報を取得するためのコマンドは？</h2>
  <?php foreach($command as $value3) { ?>
      <input type="radio" name="command">
      <?php echo $value3;
    }
    ?>
    <br> 
    <input type="hidden" name="name" value=<?php echo $name; ?> />
    <input type="hidden" name="answer1" value=<?php echo $answer1; ?> />
    <input type="hidden" name="answer2" value=<?php echo $answer2; ?> />
    <input type="hidden" name="answer3" value=<?php echo $answer3; ?> />
    <input type="submit" value="回答する" />
  </form>
  </div>