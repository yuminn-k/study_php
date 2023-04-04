<?php

// php.ini
// display_errors=Offの場合は
// この書き方でエラー表示できます
// ini_set("display_errors", 1);
// error_reporting(E_ALL);

//インターフェース
interface ProductInterface{
  //変数 関数
  // public function echoProduct(){
  //   echo '親クラスです';
  // }

  public function getProduct();

}

//インターフェース
interface NewsInterface{
  //変数 関数
  // public function echoProduct(){
  //   echo '親クラスです';
  // }

  
  public function getNews();

}

//具象クラス、親クラス・基底クラス・スーパークラス
class BaseProduct{
  //変数 関数
  public function echoProduct(){
    echo '親クラスです';
  }

  //オーバーライド(上書き)
  public function getProduct(){
    echo '親の関数です';
  }
}

//子クラス・派生クラス・サブクラス
class Product implements ProductInterface, NewsInterface {

  //アクセス修飾子, private(外からアクセスできない), protected(自分・継承したクラス), public(公開)

  //変数
  private $product = [];

  //関数

  //初回
  function __construct($product = null){

    $this->product = $product;
  }

  public function getProduct(){
    
    echo $this->product;
  }

  public function addProduct($item){
    $this->product .= $item;
  }

  public function getNews(){
    echo 'ニュースです';
  }


  public static function getStaticProduct($str){
    echo $str;
  }

}

$instance = new Product('テスト');

var_dump($instance);

$instance->getProduct();
echo '<br>';

//親クラスのメソッド
// $instance->echoProduct();
// echo '<br>';


$instance->addProduct('追加分');
echo '<br>';

$instance->getProduct();
echo '<br>';

// $instance->getNews();
// echo '<br>';

//静的(static) クラス名::関数名
Product::getStaticProduct('静的');
echo '<br>';
