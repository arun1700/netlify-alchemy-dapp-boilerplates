<?php
$conn= new mysqli('localhost:4306','root','','adbmsproject');

if (!$conn)
{
    error_reporting(0);
    die("Could not connect to mysql".mysqli_error($conn));
}

?>