<?php

require "Db.php";

$config = require("config.php");

$query = "SELECT * FROM kolektivi";

$db = new Db($config);
$kolektivi = $db->execute($query,[])->fetchAll();

$title = "Kolektivi";
require "views/kolektivi.view.php";