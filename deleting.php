<?php
session_start();

include_once 'parts/config.php';
$user = "$_SESSION[username]";
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql="DELETE FROM users WHERE username='$_SESSION[username]'";

if (!mysqli_query($conn,$sql))
{
die('Error: ' . mysqli_error($conn));
}
echo "Record Deleted";
header("Refresh:3; url=login.php");

mysqli_close($conn);
?>