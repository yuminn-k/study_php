<?php
$parameters = ['  空白あり ', '  配列 ', ' 空白あり  '];

echo '<pre>';
var_dump($parameters);
echo '</pre>';

// array_map (引数に関数) 配列の値それぞれに関数を適用する
$trimedParameters = array_map('trim', $parameters);
echo '<pre>';
var_dump($trimedParameters);
echo '</pre>';