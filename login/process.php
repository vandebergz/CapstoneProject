<?php
    
    $userid = $_POST['user'];
    $password = $_POST['pass'];

    $userid = stripcslashes($userid);
    $password = stripcslashes($password);
    $userid = mysql_real_escape_string($userid);
    $password = mysql_real_escape_string($password);

    mysql_connect("localhost", "root", "");
    mysql_select_db("login");

    $result = mysql_query("select * from tets where userid = '$userid' and password = '$password'")
        or die("Failed to query database".mysql_error());
$row = mysql_fetch_array($result);
if ($row['userid'] == $userid && $row['password'] == $password ){
    echo "login success! Welcome ".$row['userid'];
}   else {
        echo "failed login";
}
?>