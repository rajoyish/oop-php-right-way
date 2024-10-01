<?php

use App\DB;
use App\Formatter;
use App\Transaction;

require_once __DIR__ . '/../vendor/autoload.php';

$transaction1 = new Transaction(100, 'Purchase 1');
$transaction2 = new Transaction(200, 'Purchase 1');

// echo Transaction::$count;
echo Transaction::getCount();

echo "<hr />";

$transaction1->process();

echo "<hr />";

echo Formatter::formatCurrency(999.80);

echo "<hr />";

$dbInstance = DB::getInstance(['host' => 'localhost', 'user' => 'root', 'pass' => 'secret']);
$anotherDbInstance = DB::getInstance(['host' => 'localhost', 'user' => 'root', 'pass' => 'secret']);

var_dump($dbInstance === $anotherDbInstance);
