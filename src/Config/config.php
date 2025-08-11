<?php

    include_once __DIR__ . "/../../vendor/autoload.php";

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
    $dotenv->load();

    $connection = $_ENV["DB_CONNECTION"];
    $host = $_ENV["DB_HOST"];
    $dbname = $_ENV["DB_DATABASE"];
    $user = $_ENV["DB_USERNAME"];
    $pass = $_ENV["DB_PASSWORD"];
?>