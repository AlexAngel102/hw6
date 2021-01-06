<?php

namespace App;

use http\Exception\UnexpectedValueException;

class User
{
    protected string $name;
    protected string $email;
    protected string $password;
    protected string $adress;

    public function __construct(string $name, string $email, string $password, string $adress)
    {
        $this->setName($name);
        $this->setEmail($email);
        $this->setPassword($password);
        $this->setAdress($adress);
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setEmail(string $email): void
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
        } else {
            throw new UnexpectedValueException('Wrong e-mail adress');
        }
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function setAdress(string $adress): void
    {
        $this->adress = $adress;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getAdress(): string
    {
        return $this->adress;
    }


}