<?php

class Foods {
    /* we need to declare what data type we will be using for a variable*/
    public string $name;
    public string $type;
    public int $quantity;

    // Sets the name of the food
    function set_name($name): void // make it void
    {
        $this->name = $name;
    }
    function get_name(): string { // never forget to add data type to avoid warning
        return $this->name;
    }

    // Gets what type of food this is
    function set_type($type): void {
        $this->type = $type;
    }
    function get_type(): string {
        return $this->type;
    }

    function set_quantity($quantity): void {
        $this->quantity = $quantity;
    }
    function get_quantity(): int
    {
        return $this->quantity;
    }

}