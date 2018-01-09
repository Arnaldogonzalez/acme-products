<?php>
// If the form was submitted
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

    $ins = '';
    foreach($_POST['del_ids'] as $id) {
        $ins .= "{$id},";
    }

    $ins = trim($ins, ',');

    // Delete the category
    echo $category->delete($ins) ? 'true' : 'false';
}