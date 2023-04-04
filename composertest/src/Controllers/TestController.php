<?php
namespace src\Controllers;

use src\Models\TestModel; // ファイル名でクラス名である

class TestController
{
  public function run() {
    $model = new TestModel; // インスタンス化
    echo $model->getHello();
  }
}

?>