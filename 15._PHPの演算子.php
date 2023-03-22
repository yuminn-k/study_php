<?php
// 四則演算子： +,-,*,/,%
// 比較演算子：>,>=,+=,===,!==
// 論理演算子：and,&&,or,||,xor
// != null, != emptyはよく使う
// ==は使わない, ===を使う
// ++でインクリメント

$test_1 = 7;
$test_2 = 3;

$test_3 = $test_1 + $test_2;
echo $test_3; // 10

$test_3 = $test_1 - $test_2;
echo $test_3; // 4

$test_3 = $test_1 * $test_2;
echo $test_3; // 21

$test_3 = $test_1 / $test_2;
echo $test_3; // 2.3333..

// ３つに分けたい時とかよく使う
$test_3 = $test_1 % $test_2;
echo $test_3; // 1

?>