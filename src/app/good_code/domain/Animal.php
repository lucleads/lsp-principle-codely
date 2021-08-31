<?php

namespace App\good_code\domain;

/**
 * Class Animal
 * @package App\good_code\domain
 */
abstract class Animal
{
    public abstract function makeSound(): string;
}