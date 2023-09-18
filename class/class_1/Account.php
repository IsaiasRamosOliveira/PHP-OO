<?php

class Account
{
    public string $cpf;
    public string $name;
    private float $balance;
    private static $amountAccount = 0;

    public function __construct(string $cpf, string $name) {
        $this->cpf = $cpf;
        $this->name = $name;
        $this->balance = 0;

        Account::$amountAccount++;
    }
    public function __destruct(){
        if(self::$amountAccount > 2){
            echo "Há" . " " . self::getAmountAccount() . PHP_EOL;
        };
    }

    function withdraw(float $value): float
    {
        return $this->balance -= $value;
    }
    public static function getAmountAccount(){
        return Account::$amountAccount;
    }
};

$user1 = new Account("000000000-00", "Isaías");
$user2 = new Account("000000000-00", "Isaías");
$user3 = new Account("000000000-00", "Isaías");

$user1->withdraw(200);

// var_dump($user1);

echo Account::getAmountAccount();
