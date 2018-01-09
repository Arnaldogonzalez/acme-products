<?php
// If th form was submitted
if($_POST) {
// Include core configuration
include_once '../config/core.php';

// Include database connection
include_once '../config/database.php';

// Category object
include_once '../objects/category.php';

// Class instance
$database = new Database();
$db = $database->getConnection();
$category = new Category($db);

// Set category property values
$category->name = $_POST['name'];

}