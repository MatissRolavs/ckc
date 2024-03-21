<?php
require "Db.php";
$config = require("config.php");

$db = new Db($config);

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $query = "INSERT INTO pasakumi (datums, nosaukums, vieta) VALUES (:datums, :nosaukums, :vieta);";

    $params = [
        ":datums" => $_POST["date"],
        ":nosaukums" => $_POST["title"],
        ":vieta" => $_POST["location"]
    ];
    $db->execute($query,$params);

    header("Location: /");
    die();
}

$title = "Pievieno datus";
require "views/pasakumi-create.view.php";