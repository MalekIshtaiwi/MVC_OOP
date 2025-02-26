<?php
require_once 'models/Product.php';

try {
    $products = new Product();
    $products = $products->getProducts();
} catch (Exception $e) {
    echo $e->getMessage();
}

require_once 'views/products/show.view.php';

?>