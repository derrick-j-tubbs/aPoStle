<?php
/**
 * These functions are used for creating and d
 */
require_once('php_helpers.php');

function CreateColor($colorName, $dbConnection) {

    $colorName = StringTrimmer($colorName);

    $query = "SELECT * FROM Color WHERE color_description='$colorName'";

    if (!($result = $dbConnection->query($query))) {
        trigger_error("Query: $query\n<br />MySQL Error: " . $dbConnection->error);
        //trigger_error is used to trigger a user error condition, usually used in conjunction
        //with the built-in error handler
    }

    if (mysqli_num_rows($result) == 0) {
        $id_query ="SELECT MAX(color_id) FROM Color";

        $result = QueryRunner($id_query, $dbConnection);

        $row = mysqli_fetch_assoc($result);
        $idNumber= $row['MAX(color_id)'] + 1;

        $insert_query = "INSERT INTO Color VALUES ($idNumber, '$colorName')";

        QueryRunner($insert_query, $dbConnection);
        echo("<h1>Color Successfully Added</h1>");
    } else {
        echo("<h1>ERROR: Color already Exists.</h1>");
    }
}

function CreateCategory($categoryName, $dbConnection) {
    $categoryName = StringTrimmer($categoryName);

    $query = "SELECT * FROM Category WHERE category_description='$categoryName'";

    $result = QueryRunner($query, $dbConnection);

    if (mysqli_num_rows($result) == 0) {
        $id_query ="SELECT MAX(category_id) FROM Category";

        $result = QueryRunner($id_query, $dbConnection);

        $row = mysqli_fetch_assoc($result);
        $idNumber= $row['MAX(category_id)'] + 1;

        $insert_query = "INSERT INTO Category VALUES ($idNumber, '$categoryName')";

        QueryRunner($insert_query, $dbConnection);
        echo("<h1>Category Successfully Added</h1>");
    } else {
        echo("<h1>ERROR: Category already Exists.</h1>");
    }
}

function CreateEmployee($employeeNumber, $employeeName, $userLevel, $dbConnection) {

    $id_query = "SELECT * FROM Employee WHERE employee_id=$employeeNumber";
    $result = QueryRunner($id_query, $dbConnection);

    if (mysqli_num_rows($result) == 0) {

        $password='0000';
        $password_token = SaltAndHash($password);

        $insert_query = "INSERT INTO Employee (employee_id, user_level, employee_name, employee_password) VALUES ($employeeNumber, $userLevel, '$employeeName', '$password_token');";
        QueryRunner($insert_query, $dbConnection);
        echo("<h1>Employee Successfully Created.</h1>");
    } else {
        echo("<h1>Employee Number already in use.</h1>");
    }
}