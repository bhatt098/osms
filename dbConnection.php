<?php
$db_host = "remotemysql.com";
$db_user = "VcXk5RrGA7";
$db_password = "5vPJl7hxKa";
$db_name = "VcXk5RrGA7";

// Create Connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Check Connection
if($conn->connect_error) {
 die("connection failed");
}
?>
