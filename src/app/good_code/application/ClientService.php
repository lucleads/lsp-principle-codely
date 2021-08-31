<?php

namespace App\good_code\application;

use App\good_code\domain\Animal;

/**
 * Class ClientService
 * @package App\good_code\application
 */
class ClientService
{

    public function makeTweetSound(Animal $animal): void
    {
        print_r("The animal sounds like: " . $animal->makeSound() . "<br>");
    }
}