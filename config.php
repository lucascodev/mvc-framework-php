<?php 

require_once __DIR__ . '/vendor/autoload.php';

use \App\Common\Environment;

Environment::load(__DIR__);

$env = getenv();

$host = $env['DB_HOST'];
$dbname = $env['DB_NAME'];
$user = $env['DB_USER'];
$password = $env['DB_PASS'];
