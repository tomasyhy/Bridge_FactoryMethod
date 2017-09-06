<?php

namespace Supplier;

require_once "SupplierInterface.php";

class SupplierB implements SupplierInterface
{
    public const DELIVERY_TIME = 2;
    public const DELIVERY_COST = 1;

    public function placeOrder(string $productName)
    {
        echo "{$productName} ordered from SupplierB";
    }
}