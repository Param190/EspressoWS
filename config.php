<?php
$conn=new mysqli("localhost", "root", "param1903", "coffee_blend");

if($conn->connect_error)
die("Connection error is ".$conn->connect_error);
?>