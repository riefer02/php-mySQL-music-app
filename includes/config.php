<?php
ob_start(); // turns on output buffering
session_start(); // allows for variables to exist after page refresh
$timezone = date_default_timezone_set("America/Chicago");
$con = mysqli_connect("localhost", "root", "", "plabak");

if (mysqli_connect_errno()) {
    echo "Failed to connect: " . mysqli_connect_errno();
}