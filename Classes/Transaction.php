<?php 

class Transaction {
    public function __construct(
        private $type,
        private $amount,
        private $date = null
    ) {
        $this->date = $this->date ?? date('Y-m-d H:i:s');
    }

    public function getDetails() {
        return "{$this->date} - {$this->type}: {$this->amount}";
    }
}
