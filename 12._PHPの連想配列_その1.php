<?php

// keyとvalueの形
// keyのとこは文字になるので''をつけること
// keyとvalueを繋がるとき、->じゃなくて=>で
// valueのとこは文字なら''をつけて数字ならそのままで
$array_member = [
  'name' => '本田',
  'height' => 170,
  'hobby' => 'サッカー'
];

echo $array_member['name']; // 本田

echo '<pre>';
var_dump($array_member);
echo '</pre>';
/*
array(3) {
  ["name"]=>
  string(6) "本田"
  ["height"]=>
  int(170)
  ["hobby"]=>
  string(12) "サッカー"
}
*/

?>