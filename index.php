<?php

require_once "Product/ProductX.php";
require_once "Product/ProductY.php";
require_once "Supplier/CheapSupplierFactory.php";
require_once "Supplier/FastSupplierFactory.php";

use Product\{ProductX, ProductY};
use Supplier\CheapSupplierFactory;
use Supplier\FastSupplierFactory;


$productXCheapDelivery = new ProductX(new CheapSupplierFactory());
$productXFastDelivery = new ProductX(new FastSupplierFactory());

$productYCheapDelivery = new ProductY(new CheapSupplierFactory());
$productYFastDelivery = new ProductY(new FastSupplierFactory());

echo $productXCheapDelivery->order();
echo $productXFastDelivery->order();
echo $productYCheapDelivery->order();
echo $productYFastDelivery->order();
