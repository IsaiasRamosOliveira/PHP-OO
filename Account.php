<?php

class Account
{
    public string $cpf;
    public string $name;
    private float $balance;

    public function __construct(string $cpf, string $name) {
        $this->cpf = $cpf;
        $this->name = $name;
        $this->balance = 0;
    }
    function withdraw(float $value): float
    {
        return $this->balance -= $value;
    }
};

$user1 = new Account("000000000-00", "Isaías");

$user1->withdraw(200);

var_dump($user1);
