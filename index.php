<?php
include_once __DIR__."/vendor/autoload.php";

use App\Utilities\Database;

$db = new Database;
require_once __DIR__."/routers/web.php";
require_once __DIR__."/kernel.php";
