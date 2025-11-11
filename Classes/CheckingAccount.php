<?php 
class CheckingAccount extends Account
{
    private $overdraftLimit = 500;

    public function withdraw($amount)
        {
            if($amount > ($this->getBalance() + $this->overdraftLimit)){
                echo "Exceeded overdraft limit. \n";
                return;
            }
            $this->setBalance($this->getBalance() - $amount);
            $this->addTransaction('withdraw', $amount);
            echo "Withdraw $amount . New balance: {$this->getBalance()}\n";
        }
}
