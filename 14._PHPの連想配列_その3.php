<?php

// 配列の中にまたkeyとvalueを書くことができる。
$array_member_2 = [
  '本田' => [
    'height' => 170,
    'hobby' => 'サッカー'
  ], 
  '香川' => [
    'height' => 165,
    'hobby' => 'サッカー'
  ]
];

echo $array_member_2['香川']['height']; // 165

echo '<pre>';
var_dump($array_member_2);
echo '</pre>';
/*
array(2) {
  ["本田"]=>
  array(2) {
    ["height"]=>
    int(170)
    ["hobby"]=>
    string(12) "サッカー"
  }
  ["香川"]=>
  array(2) {
    ["height"]=>
    int(165)
    ["hobby"]=>
    string(12) "サッカー"
  }
}
*/

$array_member_3 = [
  '1kumi' => [
    '本田' => [
      'height' => 170,
      'hobby' => 'サッカー'
    ], 
    '香川' => [
      'height' => 165,
      'hobby' => 'サッカー'
    ]
  ],
  '2kumi' => [
    '長友' => [
      'height' => 160,
      'hobby' => 'サッカー'
    ],
    '乾' => [
      'height' => 168,
      'hobby' => 'サッカー'
    ]
  ]
];

echo $array_member_3['2kumi']['長友']['height'];  // 160

echo '<pre>';
var_dump($array_member_3);
echo '</pre>';
/*
array(2) {
  ["1kumi"]=>
  array(2) {
    ["本田"]=>
    array(2) {
      ["height"]=>
      int(170)
      ["hobby"]=>
      string(12) "サッカー"
    }
    ["香川"]=>
    array(2) {
      ["height"]=>
      int(165)
      ["hobby"]=>
      string(12) "サッカー"
    }
  }
  ["2kumi"]=>
  array(2) {
    ["長友"]=>
    array(2) {
      ["height"]=>
      int(160)
      ["hobby"]=>
      string(12) "サッカー"
    }
    ["乾"]=>
    array(2) {
      ["height"]=>
      int(168)
      ["hobby"]=>
      string(12) "サッカー"
    }
  }
}
*/

?>