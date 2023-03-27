<?php
// スーパーグローバル変数　php ９種類
// 連想配列
if (!empty($_POST)) {
  echo '<pre>';
  var_dump($_POST);
  echo '</pre>';
  /*
  array(3) {
    ["your_name"]=>
    string(3) "aaa"
    ["email"]=>
    string(5) "aa@na"
    ["btn_confirm"]=>
    string(12) "確認する"
  }
  */
}

// 入力、確認、完了 input.php, confirm.php, thanks.php
// 今回はinput.phpだけで

$pageFlag = 0;

if (!empty($_POST['btn_confirm'])) {
  $pageFlag = 1;
}
if (!empty($_POST['btn_submit'])) {
  $pageFlag = 2;
}

?>

<!DOCTYPE html>
<meta charset="UTF-8">
<head></head>
<body>
  
<?php if ($pageFlag === 1) : ?>
<form method="POST" action="index.php">
氏名
<?php echo $_POST['your_name']; ?>
<br>
メールアドレス
<?php echo $_POST['email']; ?>
<br>
<input type="submit" name="btn_submit" value="送信する">
<input type="hidden" name="your_name" value="<?php echo $_POST['your_name']; ?>">
<input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
</form>
<?php endif; ?>

<?php if ($pageFlag === 2) : ?>
送信が完了しました。
<?php endif; ?>

<?php if ($pageFlag === 0) : ?>

<form method="POST" action="index.php">
氏名
<input type="text" name="your_name">
<br>
メールアドレス
<input type="email" name="email">
<br>
<input type="submit" name="btn_confirm" value="確認する">

</form>
入力画面
<?php endif; ?>

</body>
</html>