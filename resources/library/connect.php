<?php
require_once "../resources/configuration/config.php";

$connect = new mysqli(HOST, USER, PASSWORD, DATABASE);

if($connect->connect_error) {
    die("Connection to database failed!");
}
?>
