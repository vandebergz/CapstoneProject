<?php
/**
 * Created by PhpStorm.
 * User: evanap
 * Date: 3/7/17
 * Time: 9:52 PM
 */
$username="root";
$password="";
$database="database";

// Create connection
$conn = new mysql(localhost, $username, $password);

// Check connection
if (mysqli_connect_error()) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

mysqli_close($conn);

