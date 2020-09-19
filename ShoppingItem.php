<?php


class ShoppingItem
{
    private Item $product;
    private int $qty;

    /**
     * ShoppingItem constructor.
     * @param Item $product
     * @param int $qty
     */
    public function __construct(Item $product, int $qty)
    {
        $this->product = $product;
        $this->qty = $qty;
    }

    public function increaseQty($amount=1):bool
    {
        if(!($this->getQty() + $amount > $this->getProduct()->getAvailableQty())){
            $this->setQty($this->getQty() + $amount);
            return true;
        }
        echo "Available number od products has been exceeded";
    }

    public function decreaseQty($amount=1):bool
    {
        if(!($this->getQty() - $amount < 0)){
            $this->setQty($this->getQty() - $amount);
            return true;
        }
        echo "Quantity cant be less then 0";
        return false;

    }

    /**
     * @return Item
     */
    public function getProduct(): Item
    {
        return $this->product;
    }

    /**
     * @param Item $product
     */
    public function setProduct(Item $product): void
    {
        $this->product = $product;
    }

    /**
     * @return int
     */
    public function getQty(): int
    {
        return $this->qty;
    }

    /**
     * @param int $qty
     */
    public function setQty(int $qty): void
    {
        $this->qty = $qty;
    }


}