<?php

namespace Supplier;

class CheapSupplierFactory extends SupplierFactory
{
    public function factoryMethod(): SupplierInterface
    {
        if(SupplierA::DELIVERY_COST < SupplierB::DELIVERY_COST) {
            return new SupplierA();
        } else {
            return new SupplierB();
        }
    }
}