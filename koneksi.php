<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "weshop";

    $koneksiPDO = new PDO("mysql:host=$server;dbname=$database", $username, $password);