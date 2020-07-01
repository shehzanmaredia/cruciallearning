<?php
include_once 'functions.inc.php';

$dbServername = "localhost";
$dbName = "competition_site";

$dbUsername = "root";
$dbPassword = "root";
$dbLoginTable = "loginsystem";
$problemTable = "problems";
$solutionsTable = "solutions";
$dbMessageTable = "usermessages";

try {
    $connection = new PDO("mysql:host=".$dbServername.";dbname=".$dbName, $dbUsername, $dbPassword);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "$e";
    exit();
}