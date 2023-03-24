<?php

// 指定文字列で文割
$str_2 = '指定文字列で、文割します';

echo '<pre>';
var_dump(explode('、', $str_2));
/*
array(2) {
  [0]=>
  string(18) "指定文字列で"
  [1]=>
  string(15) "文割します"
}
*/
echo '</pre>';


// implode
// 正規表現
// 文字かどうか
// 数字かどうか
// 郵便番号
// メールアドレスか　test@gmail.com

$str_3 = '特定の文字列が含まれるか確認する';
echo preg_match('/文字列/', $str_3);  // 1


// 指定文字列から文字列を取得する
echo substr('abcde', '1');  // bcde
echo mb_substr('かきくけこ', 2);  // くけこ

?>