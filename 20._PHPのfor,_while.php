<?php

// for：繰り返す数が決まっていたら
// while：繰り返す数が決まっていなかったら

// continue, breakも入れる。読みむずくなるのでできるだけ使わないように。
for($i = 0 ; $i < 10 ; $i++) {
  if ($i === 5) break;  // end of loop
  if ($i === 5) continue; // skip
  echo $i;  // 0123456789
}

echo '<br>';

$j = 0;
while($j < 5) {
  echo $j++;  // 01234
}

echo '<br>';

// ほぼ使わない。
do {
  echo $j;
} while($j < 5);

?>