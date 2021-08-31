<?php

namespace App\bad_code\application;

use App\bad_code\domain\Bird;

/**
 * Class ClientService
 * @package App\bad_code\application
 */
class ClientService
{
    /**
     * makeTweetSound
     * @param $bird
     */
    public function makeTweetSound(Bird $bird): void
    {
        print_r("The bird sounds like: " . $bird->tweet());
    }
}