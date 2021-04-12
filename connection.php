<?php
$host="localhost";
$username="root";
$password="";
$database_name="tsf_bank";
$conn = mysqli_connect($host, $username, $password, $database_name);

if (!$conn) {
  die("Could not connect to the database! " . mysqli_connect_error());
}
?>
