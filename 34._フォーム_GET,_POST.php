<?php
// スーパーグローバル変数　php ９種類
// 連想配列
if (!empty($_POST)) {
  echo '<pre>';
  var_dump($_POST);
  echo '</pre>';
}
?>

<!DOCTYPE html>
<meta charset="UTF-8">
<head></head>
<body>

<!-- "POST"の代わりに"GET"もできる。 -->
<form method="POST" action="index.php">
氏名
<input type="text" name="your_name">
<br>
<input type="checkbox" name="sports[]" value="野球" >野球
<input type="checkbox" name="sports[]" value="サッカー" >サッカー
<input type="checkbox" name="sports[]" value="バスケ" >バスケ
<input type="submit" value="送信">
</form>
</body>
</html>