<?php

namespace Supplier;

require_once "SupplierInterface.php";

class SupplierA implements SupplierInterface
{
    public const DELIVERY_TIME = 1;
    public const DELIVERY_COST = 2;

    public function placeOrder(string $productName)
    {
        echo "{$productName} ordered from SupplierA";
    }

}