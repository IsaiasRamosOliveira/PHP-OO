<?php

class Account
{
    public string $cpf;
    public string $name;
    public float $balance;
    function withdraw(float $value): float
    {
        return $this->balance -= $value;
    }
};

$user1 = new Account();

$user1->name = "Isaias";
$user1->cpf  = "0000000000-00";
$user1->balance = 3000;

$user1->withdraw(200);

var_dump($user1);
