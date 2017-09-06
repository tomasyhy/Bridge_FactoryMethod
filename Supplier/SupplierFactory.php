<?php

namespace Supplier;

require_once "SupplierA.php";
require_once "SupplierB.php";

abstract class SupplierFactory
{
    public function factoryMethod(): SupplierInterface
    {
    }
}