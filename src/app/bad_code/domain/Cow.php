<?php

namespace App\bad_code\domain;

use BadMethodCallException;

/**
 * Class Cow
 * @package App\bad_code\domain
 */
class Cow extends Bird
{
    private const COW_SOUND = "MUUUUU";

    /**
     * tweet
     */
    function tweet(): string
    {
        throw new BadMethodCallException("Cows cannot tweet");
    }

    /**
     * lowing
     */
    function lowing(): string
    {
        return self::COW_SOUND;
    }
}