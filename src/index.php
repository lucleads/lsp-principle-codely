<?php

/*
use App\bad_code\application\ClientService;
use App\bad_code\domain\Bird;
use App\bad_code\domain\Cow;
*/

use App\good_code\application\ClientService;
use App\good_code\domain\Bird;
use App\good_code\domain\Cow;

require __DIR__ . '/vendor/autoload.php';

$clientService = new ClientService();
$bird = new Bird();
$cow = new Cow();

$clientService->makeTweetSound($bird);
$clientService->makeTweetSound($cow);