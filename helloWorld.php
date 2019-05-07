<?php
require 'vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('Laboration 1');
$log->pushHandler(new StreamHandler('greetings.log', Logger::INFO));

$name = $argv[1];

$log->info("Hello $name! What a wonderful name!");
echo "Hello $name! What a wonderful name!";