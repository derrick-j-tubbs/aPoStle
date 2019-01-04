<?php
if (isset($_POST['searchSKU'])) {
    require_once("../php_handlers/php_helpers.php");

    $response = "<ul><li>No data found!</li></ul>";

    $q = $dbConnection->real_escape_string($_POST['q']);

    $query = "SELECT * FROM item WHERE sku LIKE '%$q%' LIMIT 5";

    $result = QueryRunner($query, $dbConnection);

    if ($result->num_rows > 0) {
        $response = "<ul>";

        while ($data = $result->fetch_array())
            $response .= "<li>" . $data['sku'] . "</li>";

        $response .= "</ul>";
    }
    exit($response);
}