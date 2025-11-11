<?php

class SavingsAccount extends Account {
    private $interestRate = 0.05;

    public function withdraw($amount) {
        if ($amount > $this->getBalance()) {
            echo "Insufficient funds.\n";
            return;
        }
        $this->setBalance($this->getBalance() - $amount);
        $this->addTransaction('withdraw', $amount);
        echo "Withdraw $amount . New balance: {$this->getBalance()}\n";
    }

    public function addInterest() {
        $interest = $this->getBalance() * $this->interestRate;
        $this->deposit($interest); // use deposit method to record transaction
        echo "Interest added: $interest\n";
    }
}
