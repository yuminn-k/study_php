<?php
namespace src\Models; // 実際の経路で作成

// ファイル名と一致させる
class TestModel
{
  private $text = 'hello world';

  public function getHello() {
    // return $this->text;
    return $this->$text;
  }
}


?>