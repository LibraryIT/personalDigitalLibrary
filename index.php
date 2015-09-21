<?php
require __DIR__ . '/vendor/autoload.php';
use Monolog\Logger;

$log = new Logger('personalSite');

$log->addWarning('testing');

echo ('Hello World');
?>