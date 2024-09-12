<?php

use Ramsey\Uuid\UuidFactory;

require __DIR__ . '/../vendor/autoload.php';

use App\PaymentGateway\Paddle\Transaction;

$paddleTransaction = new Transaction();

var_dump($paddleTransaction);

echo "<hr>";

$id = new UuidFactory();
echo $id->uuid4();
