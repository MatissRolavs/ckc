<?php
require "Db.php";

$config = require("config.php");

$db = new Db($config);

if(isset($_POST['submit']))
{
    $query = "INSERT INTO pasakumi (datums, nosaukums, vieta) VALUES ('','','')";
    $result = mysql_query($query);
}

$title = "Pievieno datus";
require "views/create.view.php";