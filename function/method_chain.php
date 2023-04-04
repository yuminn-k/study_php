<?php

// http://www.objective-php.net/blog/detail/20100113

// 商品クラス
class Product
{
    private $price = 1000;

    // 価格取得
    public function getPrice()
    {
        return $this->price;
    }
}

// カートクラス
class Cart
{
    private $products = [];

    // 商品追加
    public function addItem($product)
    {
        $this->products[] = $product;
    }
    // 商品取得
    public function getItem($index)
    {
        return $this->products[$index];
    }
}

$cart = new Cart();

// 引数にインスタンス
$cart->addItem(new Product());

// 通常(それぞれメソッド実行)
$gotItem = $cart->getItem(0);
$price = $gotItem->getPrice();

echo '<br>';
echo '通常メソッド' . '<br>';
echo $price;
echo '<br>';

// メソッドチェーン 
// メソッドの後にインスタンス(この場合はProduct)のメソッド(getPrice)をチェーンのように実行できる
$price = $cart->getItem(0)->getPrice();

echo 'メソッドチェーン' . '<br>';
echo $price;
echo '<br>';
