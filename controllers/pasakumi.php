<?php

require "/Db.php";

$config = require("/config.php");

$query = "SELECT * FROM pasakumi";

$db = new Db($config);
$pasakumi = $db->execute($query,[])->fetchAll();

$title = "Pasakumi";
require "/views/pasakumi.view.php";