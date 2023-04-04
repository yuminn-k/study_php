<?php
//可変引数
function combine(string ...$name): string
{
    $combinedName = '';
    for($i = 0; $i < count($name); $i++) {
        $combinedName .= $name[$i];
        if($i != count($name) - 1) {
            $combinedName .= '・';
        }
    }
    return $combinedName;
}
 
$lName = '名前';
$fName = '苗字';
$name1 = combine($fName, $lName);

echo '結合結果: '. $name1 ;
echo '<br>';

$variableLength = combine('テスト1', 'テスト2', 'テスト3');
echo $variableLength;

