<?php
// スーパーグローバル変数　php ９種類
// 連想配列

// if (!empty($_POST)) {
//   echo '<pre>';
//   var_dump($_POST);
//   echo '</pre>';
// }

header('X-Frame-Options'); // ?

// 攻撃の対策　XSS
function h($str)
{
  return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
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
<?php echo h($_POST['your_name']); ?>
<br>
メールアドレス
<?php echo h($_POST['email']); ?>
<br>
<input type="submit" name="back" value="戻る" >
<input type="submit" name="btn_submit" value="送信する">
<input type="hidden" name="your_name" value="<?php echo h($_POST['your_name']); ?>">
<input type="hidden" name="email" value="<?php echo h($_POST['email']); ?>">
</form>
<?php endif; ?>

<?php if ($pageFlag === 2) : ?>
送信が完了しました。
<?php endif; ?>

<?php if ($pageFlag === 0) : ?>

<form method="POST" action="index.php">
氏名
<input type="text" name="your_name" value="<?php if (!empty($_POST['your_name'])) { echo h($_POST['your_name']); } ?>">
<br>
メールアドレス
<input type="email" name="email" value="<?php if (!empty($_POST['email'])) { echo h($_POST['email']); } ?>">
<br>
<input type="submit" name="btn_confirm" value="確認する">

</form>
入力画面
<?php endif; ?>

</body>
</html>