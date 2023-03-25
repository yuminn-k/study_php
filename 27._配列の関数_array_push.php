<?php
// 関数　配列　一部
// in_array() 指定値が含まれているか
// array_slice() 配列から取り出す
// array_merge()　配列同士の結合
// array_push()　配列の追加
$array = ['りんご', 'みかん'];

array_push($array, 'ぶどう', 'なし');
echo '<pre>';
var_dump($array);
/*
array(4) {
  [0]=>
  string(9) "りんご"
  [1]=>
  string(9) "みかん"
  [2]=>
  string(9) "ぶどう"
  [3]=>
  string(6) "なし"
}
*/
echo '</pre>';
// array_map()　配列全てに関数を適用
// array_shift() 配列先頭から取り出す

?>