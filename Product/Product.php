<?php

namespace Product;

require_once "ProductInterface.php";
require_once "Supplier/SupplierFactory.php";

use Supplier\SupplierFactory;

abstract class Product implements ProductInterface
{
    protected $supplierFactory;

    public function __construct(SupplierFactory $supplierFactory)
    {
        $this->supplierFactory = $supplierFactory;
    }

    public function order()
    {
        return $this->supplierFactory->factoryMethod()->placeOrder($this->getName());
    }
}

