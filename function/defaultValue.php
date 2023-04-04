<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);

function defaultValue($string = '本田') // 本田の代わりにnullも可能
{
  echo $string . 'です';
}

//引数なし
defaultValue();
echo '<br>';

//引数あり
defaultValue('テスト');
