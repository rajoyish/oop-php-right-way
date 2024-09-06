<?php

declare(strict_types=1);

require_once '../Transaction.php';

$transaction = (new Transaction(100, 'Transaction 1'))
    ->addTax(8)
    ->applyDiscount(10);

$amount = $transaction->getAmount();

// unset($transaction);

// $str = '{"a":1,"b":2,"c":3}';
// $arr = json_decode($str);


echo "<pre>";
var_dump($amount);
echo "</pre>";

echo "<hr>";

$obj = new stdClass();
$obj->a = 1;
$obj->b = 2;
var_dump($obj);

echo "<hr>";

$arr = [1, 2, 3];
$castObj = (object)$arr;
var_dump($castObj->{1});

echo "<hr>";

$castIntObj = (object) 999;
var_dump($castIntObj->scalar);
