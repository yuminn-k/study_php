<?php
// 変数のスコープ
// グローバルとローカル

$globalVariable = 'グローバル変数です';

function checkScope($str) {
  $localVariable = 'ローカル変数です';
  echo $localVariable;
  // global $globalVariable;
  echo $str;
}

echo $globalVariable; // グローバル変数です
echo $localVariable; // X

checkScope($globalVariable);
/*
ローカル変数です
グローバル変数です
*/
?>