<?php

namespace App\good_code\domain;

/**
 * Class Bird
 * @package App\good_code\domain
 */
class Bird extends Animal
{
    private const BIRD_SOUND = "PIO PIO PIO";

    function tweet(): string
    {
        return self::BIRD_SOUND;
    }

    public function makeSound(): string
    {
        return self::tweet();
    }
}