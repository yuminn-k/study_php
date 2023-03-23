<?php
// !=, !==

$height = 91;

if ($height !== 90) { // 型が同じかどうか
  echo '身長は90cmではありません。';
}

// データが入っているかどうか
// isset empty is_null
$test = '1';

// empty()：空かどうかチェック
if (!empty($test)) {
  echo '変数は空ではありません。';
} else {
  echo '変数は空です。';
}

// ANDとOR
$signal_1 = 'red';
$signal_2 = 'blue';

// &&の代わりにandとつけても大丈夫だけど&&の方を使う。
if ($signal_1 === 'red' && $signal_2 === 'blue') {
  echo '赤と青です。';
}

$signal_2 = 'yellow';
if ($signal_1 === 'red' || $signal_2 === 'blue') {
  echo '赤です。';
}

// 三項演算子
// 条件 ? 真 : 偽
$math = 80;
$comment = $math > 80 ? 'good' : 'not good';

echo $comment;  // not good
?>