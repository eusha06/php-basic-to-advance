<?php
class BankAccount {
    private $balance;
    public function __construct($initialBalance = 0) {
            $this->balance = $initialBalance;
    }
    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
        } else {
            echo "Deposit amount must be positive.";
            echo "<br>";
        }
    }
    public function withdraw($amount) {
        if ($amount > 0) {
            if ($amount <= $this->balance) {
                $this->balance -= $amount;
            } 
        } else {
            echo "Withdrawal amount must be positive.<br>";
        }
    }
    public function getBalance() {
        return $this->balance;
    }
}
$account = new BankAccount(100);

$account->deposit(50);
$account->withdraw(20);
echo "Current balance: " . $account->getBalance(); 
$account->withdraw(200);
echo "<br>Final balance: " . $account->getBalance(); 
?>
