<?php
    require __DIR__ . "/../vendor/autoload.php";

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/..");
    $dotenv->load();

    use App\Database\Model;

    $config = require "../config/database.php";
    $model = new Model($config);



