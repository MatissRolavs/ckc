<?php
$url_array = parse_url($_SERVER["REQUEST_URI"]);
$url = $url_array["path"];

if($url == "/"){
    require "controllers/pasakumi.php";
}

if($url == "/kolektivi"){
    require "controllers/kolektivi.php";
}

if($url == "/create"){
    require "controllers/create.php";
}