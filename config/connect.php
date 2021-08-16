<?php
$servername = "localhost";
$username = "gawean";
$password = "Gawean@117";
$database = "gawean_app";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
