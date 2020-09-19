<?php
require_once "ShoppingItem.php";

class ShoppingCart
{

    private $items = [];

    public function addProduct(Item $product, $qty = 1):ShoppingItem
    {
        $product = new ShoppingItem($product, $qty);
        $this->items[] = $product;
        return $product;
    }

    public function getTotalQty():int
    {
        $totalQty = 0;
        foreach($this->items as $item){
            $totalQty += $item->getQty();
        }
        return $totalQty;
    }



    public function getTotal():int
    {
        $total = 0;
        foreach($this->items as $item){
           $total += $item->getProduct()->getPrice() * $item->getQty();
        }
        return $total;
    }

    public function removeProduct(Item $product)
    {
        $counter = 0;
        foreach($this->items as $item){
            if($item->getProduct()->getId() === $product->getId()){
                unset($this->items[$counter]);
            }
            $counter++;
        }
    }

    public function showOrder()
    {
        foreach($this->items as $item){
            print($item->getProduct()->getTitle()." x".$item->getQty(). " - " . $item->getPRoduct()->getPrice() ."$".PHP_EOL);
        }
        print("-----------".PHP_EOL);
        print("Total: ".$this->getTotal()."$");
    }


}