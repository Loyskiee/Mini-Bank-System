<?php 

spl_autoload_register(function ($class) {
    require_once __DIR__ . '/Classes/' . $class . '.php';
});


$savings = new SavingsAccount('Test', 1000);
$savings->deposit(500);
$savings->withdraw(200);
$savings->addInterest();
$savings->showTransaction();

echo "\n";
    