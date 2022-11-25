<link rel="stylesheet" href="answer.css">

<?php 
// [question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$name = $_POST["name"];
$number = $_POST["number"];
$word = $_POST["word"];
$command = $_POST["command"];
$answer1 = $_POST["answer1"];
$answer2 = $_POST["answer2"];
$answer3 = $_POST["answer3"];

if ($number == $answer1){
  $result1 = "正解！";
} else {
  $result1 = "残念・・・";
}

if ($word == $answer2){
  $result2 = "正解！";
} else {
  $result2 = "残念・・・";
}

if ($command == $answer3){
  $result3 = "正解！";
} else {
  $result3 = "残念・・・";
}


?>
<div class="contents">
  <p><?php echo $name; ?>さんの結果は・・・？</p>
  <p>①の答え</p>
  <?php echo $result1; ?>
  <p>②の答え</p>
  <?php echo $result2; ?>
  <p>③の答え</p>
  <?php echo $result3; ?>
</div>