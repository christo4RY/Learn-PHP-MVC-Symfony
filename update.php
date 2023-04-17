<?php
include_once __DIR__."/vendor/autoload.php";

use App\Utilities\Database;

$db = new Database();
$student = $db->update($_POST);
