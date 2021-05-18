<?php
/*
 * PHPMvc
 *
 * @author    Ferdi Sahin <ferdisahin@mail.com>
 *
 */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require __DIR__ . '/vendor/autoload.php';

$app = new \Core\Bootstrap();

require __DIR__ . '/app/route.php';

$app->run();