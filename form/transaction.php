<?php

require 'db_connection.php';

// ユーザー入力なし query
// $sql = 'select * from contacts where id = 4'; //sql
// $stmt = $pdo->query($sql); //sql実行 ステートメント

// $result = $stmt->fetchall();

// echo '<pre>';
// var_dump($result);
// echo '</pre>';

// ユーザー入力あり prepare, bind, execute 悪意ユーザ delete * SQLインジェクション対策
$sql = 'select * from contacts where id = :id'; //名前付きプレースホルダ
$stmt = $pdo->prepare($sql);//プリペアードステートメント
$stmt->bindValue('id', 5, PDO::PARAM_INT);//紐付け
$stmt->execute(); //実行

$result = $stmt->fetchall();

echo '<pre>';
var_dump($result);
echo '</pre>';

// トランザクション まとまって処理 beginTransaction, commit, rollback
// ex)銀行 残高を確認->Aさんから引き落とし->Bさんに振込

$pdo->beginTransaction();

try{

//sql処理
$stmt = $pdo->prepare($sql);//プリペアードステートメント
$stmt->bindValue('id', 5, PDO::PARAM_INT);//紐付け
$stmt->execute(); //実行

$pdo->commit();

}catch(PDOException $e){
  
  $pdo->rollback();//更新のキャンセル
}