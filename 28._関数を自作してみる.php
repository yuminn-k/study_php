<?php
// 組み込み関数 in ユーザー定義関数
// 例）郵便番号チェック（本来は正規表現）
// - 全角を半角に
// - ハイフンを削除
// - 数字かどうか
// - ７文字かどうか

$postalCode = '123-4567';

// camelCase, prefer
function checkPostalCode($str) {
  $replaced = str_replace('-', '', $str);
  $length = strlen($replaced);
  
  if ($length === 7) {
    return true;
  }
  return false;
}

echo '<pre>';
echo var_dump(checkPostalCode($postalCode));  // bool(true)
echo '</pre>';

// snakeCase
function check_postal_code() {}
?>