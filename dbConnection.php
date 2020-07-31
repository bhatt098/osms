<?php
$db_host = "sql12.freemysqlhosting.net";
$db_user = "sql12357946";
$db_password = "WKmSdhPEWr";
$db_name = "sql12357946";

// Create Connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Check Connection
if($conn->connect_error) {
 die("connection failed");
}
?>
