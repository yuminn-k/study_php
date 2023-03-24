<?php

// 文字列の長さ
// マルチバイト
// 日本語 SJIS, UTF-8(こっちの方を最近よく使う, 3~6バイト)
$text = 'あいうえお';

echo strlen($text); // 15
echo mb_strlen($text);  // 5

// 文字列の置換
$str = '文字列を置換します';

echo str_replace('置換', 'ちかん', $str); // 文字列をちかんします
?>