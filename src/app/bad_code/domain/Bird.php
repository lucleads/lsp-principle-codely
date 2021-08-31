<?php

namespace App\bad_code\domain;

/**
 * Class Bird
 * @package App\bad_code\domain
 */
class Bird
{
    private const BIRD_SOUND = "PIO PIO PIO";

    function tweet(): string
    {
        return self::BIRD_SOUND;
    }
}