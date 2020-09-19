<?php

require_once "ShoppingCart.php";
require_once "Item.php";

$cart = new ShoppingCart();
$product = new Item(1,"Iphone", 41, 6);
$product2 = new Item(2, "Samsung Galaxy", 55, 10 );
$product3 = new Item(3,"Huawei Y6", 35, 10);
$product4 = new Item(4,"Honor 10", 50, 10);

//Dodavanje proizvoda
$cartItem = $cart->addProduct($product); // Vraca objekat klase CartItem
$cartItem->increaseQty(3); //Vraca true ukoliko je kolicina u opsegu dozvoljene kolicine, false ukoluiko nije
$cart->addProduct($product2, 4); //Vraca objekat klase Cart item, moguce proslediti kolicinu kao dodatni parametar
$cart->addProduct($product3);
$cart->addProduct($product4, 2);

//Smanjenje kolicine proizvoda
$cartItem->decreaseQty(3);


//Brisanje proizvoda
$cart->removeProduct($product4);
$cart->removeProduct($product3);


//Ukupna kolicina proizvoda
echo "Total number of products: " .$cart->getTotalQty() .PHP_EOL;

//Ukupna vrednost proizvoda
echo "Total price: ".$cart->getTotal() ."$".PHP_EOL.PHP_EOL;



//Lista proizvoda
echo "List of Products:".PHP_EOL;
echo $cart->showOrder();// Izlistava sve proizvode

