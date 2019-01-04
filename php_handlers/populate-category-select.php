<?php
$query = "SELECT category_description FROM Category ORDER BY category_description";

if (!($result = $dbConnection->query($query))) {
    trigger_error("Query: $query\n<br />MySQL Error: " . $dbConnection->error);
    //trigger_error is used to trigger a user error condition, usually used in conjunction
    //with the built-in error handler
}
