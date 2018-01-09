<?php
// Include core configuration
include_once '../config/core.php';

// Include database connection
include_once '../config/database.php';

// Category object
include_once '../objects/category.php';

// Class instance
$database = new Database();
$db = $database->getConnection();
$category = new category($db);
var_dump($category);

// Read one category
var_dump($_GET['prod_id']);
$category->id=$_GET['prod_id'];
$result = $category->readOne();

//Output in json format
echo $results;