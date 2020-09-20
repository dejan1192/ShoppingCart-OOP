<?php
require_once "BuyProduct.php";

class Customer extends BuyProduct
{
    private string $name;
    private PaymentInterface $paymentType;

    /**
     * Customer constructor.
     * @param string $name
     * @param PaymentInterface $paymentType
     */
    public function __construct(string $name, PaymentInterface $paymentType)
    {
        $this->name = $name;
        $this->paymentType = $paymentType;
    }

    public function checkout(ShoppingCart $cart):?ShoppingCart
    {
       return  $this->cart = $cart;
    }
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return PaymentInterface
     */
    public function getPaymentType(): PaymentInterface
    {
        return $this->paymentType;
    }

    /**
     * @param PaymentInterface $paymentType
     */
    public function setPaymentType(PaymentInterface $paymentType): void
    {
        $this->paymentType = $paymentType;
    }



}