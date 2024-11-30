<?php

use Dotenv\Dotenv;

require_once '../src/support/helpers.php'; // Include helpers with base_path()
require_once base_path() . 'vendor/autoload.php'; // Autoloader
require_once base_path() . 'routes/web.php';     // Routes

$env = Dotenv::createImmutable(base_path());
$env->load();

app()->run();
