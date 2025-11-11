<?php 

//abstract class Account
abstract class Account implements Transactable
{   //properties 
//accountnumber (protected)
protected $accountNumber;
//balance (private)
private $balance = 0;
//transactions (protected array)
protected $transactions = [];

public function __construct($accountNumber, $balance = 0)
    {
       $this->accountNumber = $accountNumber;
       $this->balance = $balance;
    }
//get method for balance
public function getBalance()
{
    return $this->balance;
}

//set method for balance
public function setBalance($amount)
{
     if($amount < 0) {
        echo "Invalid balance amount. \n";
        return false;
    }
    $this->balance = $amount;
    return true;
}


//addTransaction    
protected function addTransaction($type, $amount)
{
    $this->transactions[] = new Transaction($type, $amount);
}

//widthdraw method
abstract public function withdraw($amount);


//deposit 
public function deposit($amount)
    {
        if($amount <= 0){
            echo "Deposit must be positive.";
            return;
        }
        $this->balance +=$amount;
        $this->addTransaction('deposit', $amount);
        echo "Deposited $amount . New Balance: {$this->balance}\n";
    }

//showTransaction
public function showTransaction()
{
    foreach($this->transactions as $transaction){
        echo $transaction->getDetails();
    }
}


}


