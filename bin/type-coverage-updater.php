<?php

declare(strict_types=1);

use Bellangelo\TypeCoverageUpdater\Commands\UpdateCommand;
use Symfony\Component\Console\Application;

require_once $_composer_autoload_path ?? __DIR__ . '/../vendor/autoload.php';

$application = new Application();
$application->add(new UpdateCommand());
$application->run();
