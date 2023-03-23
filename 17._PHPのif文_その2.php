<?php

// if文の中にまた入れるのもできる。だが、できるだけelseがない方が読みやすい。

// if (条件) {
//   条件が真なら実行
// } else {
//   条件が偽なら実行
// }

$height = 90;

if ($height === 91) {
  echo '身長は' . $height . 'cmです。';
} else {
  echo '身長は' . $height . 'cmではありません。';
}


if ($height >= 91) {
  echo '身長は' . $height . 'cmです。';
}

if ($height <= 90) {
  echo '身長は' . $height . 'cmになります。';
}

else {
  echo '身長は' . $height . 'cmではありません。';
}



$signal = 'blue';

if ($signal === 'red') {
  echo 'とまれ';
} else if ($signal === 'yellow') {
  echo '一旦停止';
} else {
  echo '進む';
}

echo '<br>';

$speed = 80;

if ($signal === 'blue') {
  if ($speed >= 80) { // ネスト
    echo 'スピード違反';
  }
}
?>