<?php

use Doctrine\ORM\Tools\Console\ConsoleRunner;

if (!defined('DEBUG')) {
    define('DEBUG', true);
}

require_once __DIR__ . '/app/config/bootstrap.php';

$helperSet = new \Symfony\Component\Console\Helper\HelperSet(array(
    'db' => new \Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper(App::doctrine()->getConnection()),
    'em' => new \Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper(App::doctrine())
));