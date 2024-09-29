<?php

use App\StatusType;
use App\Transaction;

require __DIR__ . '/../vendor/autoload.php';

echo Transaction::STATUS_PAID;

echo "<hr />";

$transaction = new Transaction;
echo $transaction::STATUS_PENDING;

echo "<hr />";

echo Transaction::class; // App\Transaction
echo "<hr />";

echo StatusType::STATUS_DECLINED;

echo "<hr />";
$transaction = new Transaction;
$transaction->setStatus(StatusType::STATUS_PENDING);
echo $transaction->getStatus();
