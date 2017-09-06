<?php

namespace Supplier;

interface SupplierInterface
{
    public function placeOrder(string $productName);
}