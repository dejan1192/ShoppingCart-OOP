<?php


class Item
{
    private int $id;
    private string $title;
    private float $price;
    private int $availableQty;

    /**
     * Item constructor.
     * @param int $id
     * @param string $title
     * @param float $price
     * @param int $availableQty
     */
    public function __construct(int $id, string $title, float $price, int $availableQty)
    {
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->availableQty = $availableQty;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
     * @return int
     */
    public function getAvailableQty(): int
    {
        return $this->availableQty;
    }

    /**
     * @param int $availableQty
     */
    public function setAvailableQty(int $availableQty): void
    {
        $this->availableQty = $availableQty;
    }



}