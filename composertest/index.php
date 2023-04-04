<?php

require_once __DIR__ . '/vendor/autoload.php';

use src\Controllers\TestController;

$app = new TestController;  // インスタンス化
$app->run();

use Carbon\Carbon;  // クラスを持って来れる

echo Carbon::now()->format('今日はY年m月d日だよ！');

?>