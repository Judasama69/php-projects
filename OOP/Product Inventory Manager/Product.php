<?php

class Product
{
	private string $name;
	private float $price;

    public function __construct(string $name, float $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getDisplay() : string {
        $formattedPrice = number_format($this->price, 2);
        return "Product: {$this->name} | Price: " . $formattedPrice;
    }

    public static function sanitize($data): string
    {
        return htmlspecialchars(strip_tags(trim($data)));
    }


}