<?php

class BankAccount {
    private $balance = 0;

    public function deposit($amount) {
        $this->balance += $amount;
    }

    public function getBalance() {
        return $this->balance;
    }

    public function withdraw($amount) {
        $this->balance -= $amount;
    }

    public function safeWithdraw($amount) {
        if ($this->balance <= 0) {
            echo "Zero balance. Cannot withdraw\n";
        } else if ($this->balance - $amount < 0) {
            echo "Action goes into the negatives. Modify withdrawal amount.\n";
        } else {
            $this->balance -= $amount;
        }
    }
}

$account = new BankAccount();

// initial deposit
$account->deposit(1999);
echo "New Balance: {$account->getBalance()}\n";

// successful withdrawal
$account->withdraw(1000);
echo "New Balance: {$account->getBalance()}\n";

// questionable withdrawal
$account->withdraw(1000);
echo "New Balance: {$account->getBalance()}\n";

$account->deposit(50);
$account->safeWithdraw(50);
echo "New Balance: {$account->getBalance()}\n";

$account->safeWithdraw(49);
echo "New Balance: {$account->getBalance()}\n";

$account->safeWithdraw(10);
// echo "New Balance: {$account->getBalance()}\n";
