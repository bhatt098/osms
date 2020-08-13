<?php
$db_host = "remotemysql.com";
$db_user = "2rBufOveB6";
$db_password = "LsC9k02Kiv";
$db_name = "2rBufOveB6";

// Create Connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Check Connection
if($conn->connect_error) {
 die("connection failed");
}
?>
