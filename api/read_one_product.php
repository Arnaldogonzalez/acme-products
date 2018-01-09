<?php
// Include core configuration
include_once '../config/core.php';

// Include database connection
include_once '../config/database.php';

// Product object
include_once '../objects/product.php';

// Class instance
$database = new Database();
$db = $database->getConnection();
$product = new Product($db);
var_dump($product);

// Read one product
var_dump($_GET['prod_id']);
$product->id=$_GET['prod_id'];
$result = $product->readOne();

//Output in json format
echo $results;