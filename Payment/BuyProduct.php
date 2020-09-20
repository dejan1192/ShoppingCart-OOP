<?php
require_once "ShoppingCart.php";
require_once "Payment/PaymentType.php";

class BuyProduct
{

    protected ShoppingCart $cart;


    public function getItems(){
        return $this->cart->getItems();
    }

    public function getInvoice(){
        foreach($this->cart->getItems() as $item){

            print($item->getProduct()->getTitle()." x".$item->getQty(). " - " . $item->getPRoduct()->getPrice() ."$".PHP_EOL);
        }
        print("-----------".PHP_EOL);
        print("Total: ".$this->cart->getTotal()."$".PHP_EOL);
    }

    public function payOrder(PaymentInterface $paymentType){
        $paymentType->pay();

    }
}