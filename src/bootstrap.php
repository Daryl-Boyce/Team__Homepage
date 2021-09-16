<?php

include __DIR__ . "/../vendor/autoload.php";
include __DIR__ . "/functions.php";

spl_autoload_register(function($class) {
    include __DIR__ ."/../classes/" . $class . ".php";
});