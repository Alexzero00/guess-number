#!/usr/bin/env php
<?php

$autoloadPath = __DIR__ . '/../vendor/autoload.php';

if (file_exists($autoloadPath)) {
    require_once($autoloadPath);
}

use function Alexzero00\GuessNumber\Controller\initiateGame;

initiateGame();