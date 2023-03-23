<?php

// 複数の値　foreach
$members = [
  'name' => '本田',
  'height' => 170,
  'hobby' => 'サッカー'
];

// バリューのみ表示
// 右の変数は何でもいい
foreach($members as $member) {
  echo $member; // 本田170サッカー
}

// キーとバリューそれぞれ表示
foreach($members as $key => $value) {
  echo $key . "は" . $value . "です。"; // 本田170サッカーnameは本田です。heightは170です。hobbyはサッカーです。
}

echo '<br>';

$members = [
  '本田' => [
    'height' => 170,
    'hobby' => 'サッカー'
  ],
  '香川' => [
    'height' => 165,
    'hobby' => 'サッカー'
  ]
];

foreach($members as $member) {
  echo $member; // ArrayArray
}

echo '<br>';

// 多段階の配列を展開
// foreachの中でforeachを囲むケースもよくある。
foreach($members as $member) {
  foreach($member as $info) {
    echo $info; // 170サッカー165サッカー
  }
}

?>