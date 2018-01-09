<?php
// Show error reporting
error_reporting(E_ALL);

// Set default time-zone
date_default_timezone_get('America/New York');

// Page is the current page, if there's nothing set, default is page 1
$page = isset($_GET['page']) ? $_GET['page'] : 1;