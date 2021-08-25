<?php
    require __DIR__ . "/../vendor/autoload.php";

    use App\Models\Model;

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/..");
    $dotenv->load();


    $model = new Model();

    echo "<pre>";
    print_r($_SERVER);
    echo "<pre>";


