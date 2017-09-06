<?php

namespace Product;

require_once "Product.php";

class ProductX extends Product
{
    private $name = 'X';

    public function getName()
    {
        return $this->name;
    }

}