<?php

namespace Supplier;

class FastSupplierFactory extends SupplierFactory
{
    public function factoryMethod(): SupplierInterface
    {
        if(SupplierA::DELIVERY_TIME < SupplierB::DELIVERY_TIME) {
            return new SupplierA();
        } else {
            return new SupplierB();
        }
    }
}