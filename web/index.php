<?php
use XCrm\Configuration\Runner;
require dirname(__DIR__) . '/vendor/autoload.php';
$app = (new Runner(dirname(__DIR__)))->createApplication()->run();



