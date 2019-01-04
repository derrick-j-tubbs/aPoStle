<?php
require_once('php_helpers.php');

function UpdateEmployee($user_level, $employee_id, $employee_name, $old_id, $dbConnection) {

    $query= "SELECT * FROM Employee WHERE employee_id=$employee_id";
    if (mysqli_num_rows($result = QueryRunner($query, $dbConnection)) == 0) {

        $update_query = "UPDATE Employee SET user_level=$user_level, employee_id=$employee_id, employee_name='$employee_name' " .
            "WHERE employee_id=$old_id";

        QueryRunner($update_query, $dbConnection);
        if (mysqli_affected_rows($dbConnection) != 0) {
            echo("<h1>Employee Updated Successfully</h1>");
        } else {
            echo("<h1>Employee Update Failed.</h1>");
        }
    } else {
        echo("<h1>Employee ID already exists.</h1>");
    }
}

/*
//NOTE: THis query still need written
function UpdateItem($ioSKU, $ioUPC, $ioDescription, $ioCost, $ioMarkup, $ioPrice, $ioQuantity, $ioCategory, $ioColor1, $ioColor2, $dbConnection) {

    $id_query = "SELECT * FROM item WHERE sku=$ioSKU";
    $result = QueryRunner($id_query, $dbConnection);

    if (mysqli_num_rows($result) == 1) {
        $update_query = "";
        QueryRunner($insert_query, $dbConnection);
        echo("<h1>Item Updated Successfully</h1>");
    } else {
        echo("<h1>Item Update Failed.</h1>");
    }
}
*/