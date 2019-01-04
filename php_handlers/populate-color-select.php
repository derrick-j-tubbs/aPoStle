<?php
$query = "SELECT color_description FROM Color ORDER BY color_description";
$color_list="";

if (!($result = $dbConnection->query($query))) {
    trigger_error("Query: $query\n<br />MySQL Error: " . $dbConnection->error);
    //trigger_error is used to trigger a user error condition, usually used in conjunction
    //with the built-in error handler
}

$i=0;
while (($row = mysqli_fetch_assoc($result))) {
    $color_list[$i] = $row['color_description'];
    $i++;
}


