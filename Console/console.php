<?php
require_once('vendor/autoload.php');
use Symfony\Component\Console\Application;


$console = new Application();


$console->add(new \Console\Commands\FirstCommand());


 
$console->run();

