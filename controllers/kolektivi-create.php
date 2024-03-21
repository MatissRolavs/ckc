<?php
require "Db.php";
$config = require("config.php");

$db = new Db($config);

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $query = "INSERT INTO kolektivi (name, description) VALUES (:title, :description);";

    $params = [
        ":title" => $_POST["title"],
        ":description" => $_POST["description"]
    ];
    $db->execute($query,$params);

    header("Location: /");
    die();
}

$title = "Pievieno datus";
require "views/kolektivi-create.view.php";