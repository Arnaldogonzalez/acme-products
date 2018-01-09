<?php
// If th form was submitted
if($_POST) {
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

// Set product property values
$product->name = $_POST['name'];

}