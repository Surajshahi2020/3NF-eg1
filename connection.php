<?php
//The ternary operator (condition ? value_if_true : value_if_false)
$conn = new mysqli("localhost", "root", "", "crud");
echo $conn->connect_error ? "Connection failed: " . conn->connect_error : "Connection successfully";
?>
