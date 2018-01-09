<?php
// If the form was submitted
if($_POST) {
    // Include core configuration
    include_once '../config/core.php';

    // Include database connection
    include_once '../config/database.php';

    // Category object
    include_once '../objects/category.php';

    // class instance
    $database = new Database();
    $db = $database->getConnection();
    $category = new category($db);

    // Set category property values
    $category->name = $_POST['name'];
    $category->price = $_POST['price'];
    $category->description = $_POST['description'];
    $category->category_id = $_POST['category_id'];
    $category->id = $_POST['id'];

    // Create the Category
    echo $category->update() ? 'true' : 'false';
}