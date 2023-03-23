<?php

// switch：phpではちょっと問題があっててできるだけif文を使うようにした方が好ましい。
// switchの場合はケースで===じゃなくて==が適用される。
$data = 1;
switch($data) {
  case 1:
    echo '１です';
    break;
  case $data === 2:
    echo '2です';
    break;
  case 3:
    echo '3です';
    break;
  default:
    echo '１−３ではありません';
}

?>