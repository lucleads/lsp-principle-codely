<?php

namespace App\good_code\domain;

/**
 * Class Cow
 * @package App\good_code\domain
 */
class Cow extends Animal
{
    private const COW_SOUND = "MUUUUU";

    /**
     * tweet
     */
    function makeSound(): string
    {
        return self::lowing();
    }

    /**
     * lowing
     */
    function lowing(): string
    {
        return self::COW_SOUND;
    }
}