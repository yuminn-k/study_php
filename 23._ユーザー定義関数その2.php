<?php
// 関数は２種類
// 組み込み関数・準備してある関数
// ユーザー定義関数・自由に作れる関数

// インプット引数　なし
// アウトプット戻り値　なし
function test() {
  // 処理
  echo 'テスト';
}

test(); // テスト

// インプット引数あり
// アウトプット戻り値
$comment = 'コメント２';

function getComment($string) {
  echo $string;
}

getComment($comment); // コメント２

// インプット引数なし
// アウトプット戻り値あり
function getNumberOfComment() {
  return 5;
}

var_dump(getNumberOfComment()); // int(5)
echo getNumberOfComment();  // 5

$commentNumber = getNumberOfComment();
echo $commentNumber;  // 5

// 引数２つ
// 戻り値あり
function sumPrice($int1, $int2) {
  $int3 = $int1 + $int2;
  return $int3;
}

$total = sumPrice(3, 5);
echo $total;  // 8

?>