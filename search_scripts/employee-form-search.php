<?php
$user_level = $employee_id = $employee_name = "";

$search_id = $_POST['searchBoxEMP'];


$query = "SELECT user_level, employee_id, employee_name FROM employee WHERE employee_id = $search_id";
$result = QueryRunner($query, $dbConnection);

$row = mysqli_fetch_assoc($result);
$user_level = $row['user_level'];
$employee_id = $row['employee_id'];
$employee_name = $row['employee_name'];
