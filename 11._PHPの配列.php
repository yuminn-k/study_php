<?php

// 配列 1行
// 数字だけでなく文字を入れることもできる。
// ０から始まる
$array_1 = [1, 2, 3];
echo $array_1;    // Array
echo $array_1[1]; // 2
var_dump($array_1); // array(3) { [0]=>int(1) [1]=>int(2) [2]=>int(3) }

// もっと綺麗に見るために<pre></pre>タッグを使う。
echo '<pre>';
var_dump($array_1);
echo '</pre>';
/**
 * array(3) {
 *  [0]=>
 *  int(1)
 *  [1]=>
 *  int(2)
 *  [2]=>
 *  int(3)
 * }
 */

 // 数字だけでなく文字も一緒に入れることができる。
$array_1 = ["あああ", 2, 3];
echo '<pre>';
var_dump($array_1);
echo '</pre>';
/**
 * array(3) {
 *  [0]=>
 *  string(9) "あああ"
 *  [1]=>
 *  int(2)
 *  [2]=>
 *  int(3)
 * }
 */

 // 配列 2行
$array_2 = [
  ['赤', '青', '黄'],
  ['緑', '紫', '黒']
];
echo '<pre>';
var_dump($array_2);
echo '</pre>';
/**
 * array(2) {
 *  [0]=>
 *  array(3) {
 *   [0]=>
 *   string(3) "赤"
 *   [1]=>
 *   string(3) "青"
 *   [2]=>
 *   string(3) "黄"
 *  }
 *  [1]=>
 *  array(3) {
 *    [0]=>
 *    string(3) "緑"
 *    [1]=>
 *    string(3) "紫"
 *    [2]=>
 *    string(3) "黒"
 *   }
 * }
 */

 echo $array_2[1][1]; // 紫

?>