<?php
require_once('php_helpers.php');

function PrintInventoryReport($flags, $dbConnection){
    $query =
        "SELECT sku, upc, cost, percent_markup * 100, price, category_description, description, quantity " .
        " FROM Item JOIN Category ON Item.category_id=Category.category_id";
    if ($flags != "") {
        $query .=" WHERE $flags";
    }
    $results = QueryRunner($query, $dbConnection);

    PrintResultsTable($results);
}

function PrintEmployees($dbConnection){
    $query = "SELECT employee_id, user_level, employee_name FROM Employee";
    $results = QueryRunner($query, $dbConnection);

    while ($row = mysqli_fetch_array($results)) {
        echo("<tr>");
        for ($i = 0; $i < (count($row)/2); $i++) {
            echo("<td>");
            if ($i==1){
                if ($row[$i]==1){
                    echo("Manager");
                } else {
                    echo("Employee");
                }
            } else {
                echo($row[$i]);
            }
            echo("</td>");
        }
        echo("</tr>");
    }
}

function PrintGiftCards($dbConnection) {
    $query = "SELECT gift_card_id, transaction_date, purchased_for, purchased_by, balance FROM Gift_Card";
    $results = QueryRunner($query, $dbConnection);

    PrintResultsTable($results);
}
function PopulateSelects($value, $displayText, $query, $dbConnection){
    $results = QueryRunner($query, $dbConnection);

    while ($row = mysqli_fetch_assoc($results)) {
        echo("<option value='" . $row[$value] . "'>");
        echo("$row[$displayText]" . "</option>");
    }
}