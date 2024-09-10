<?php
require_once '../PaymentGateway/Stripe/Transaction.php';
require_once '../PaymentGateway/Paddle/Transaction.php';
require_once '../PaymentGateway/Paddle/CustomerProfile.php';
require_once '../Notification/Email.php';

// use PaymentGateway\Paddle\{Transaction, CustomerProfile};
use PaymentGateway\Paddle;
use PaymentGateway\Stripe\Transaction as StripeTransaction;

$paddleTransaction = new Paddle\Transaction();
$stripTransaction = new StripeTransaction();
$paddleCustomerProfile = new Paddle\CustomerProfile();

var_dump($paddleTransaction, $stripTransaction, $paddleCustomerProfile);
