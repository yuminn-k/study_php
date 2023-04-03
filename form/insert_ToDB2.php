<?php

// php.ini 設定ファイル
// display_errors=Offの場合は
// この書き方でエラー表示できます。
// ini_set("display_errors", 1);
// error_reporting(E_ALL);

// DB接続 PDO

function insertContact($request){
require 'db_connection.php';

// 入力 DB保存 prepare, execute(配列(全て文字列))

$params = [
  'id' => null,
  'your_name' => $request['your_name'],
  'email' => $request['email'],
  'url' => $request['url'],
  'gender' => $request['gender'],
  'age' => $request['age'],
  'contact' => $request['contact'],
  'created_at' => null
];

// $params = [
//   'id' => null,
//   'your_name' => 'なまえ123',
//   'email' => 'test@test.com',
//   'url' => 'http://test.com',
//   'gender' => '1',
//   'age' => '2',
//   'contact' => 'いいい',
//   'created_at' => null
// ];

$count = 0;
$columns = '';
$values = '';

foreach(array_keys($params) as $key){
  if($count++>0){
    $columns .= ',';
    $values .= ',';
  }
  $columns .= $key;
  $values .= ':'.$key;
}

$sql = 'insert into contacts ('. $columns .')values('. $values .')';

// var_dump($sql);
// exit;

$stmt = $pdo->prepare($sql);//プリペアードステートメント
$stmt->execute($params); //実行

}
