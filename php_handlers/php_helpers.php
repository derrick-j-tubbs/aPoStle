<?php

function StringTrimmer ($string) {

    $string=trim($string);
    $string=str_replace('"', "", $string);
    $string=str_replace("'", "", $string);
    $string=str_replace("`", "", $string);
    
    return $string;
}

function QueryRunner ($query, $dbConnection) {
    if (!($result = $dbConnection->query($query))) {
        trigger_error("Query: $query\n<br />MySQL Error: " . $dbConnection->error);
        //trigger_error is used to trigger a user error condition, usually used in conjunction
        //with the built-in error handler
    }
    
    return $result;
}

function SaltAndHash ($password) {
    $salt1 = "XtB!@";
    $salt2 = "Qmv,3";
    $password_token = hash('ripemd128', "$salt1$password$salt2");
    
    return $password_token;
}

function PrintResultsTable($results) {
    while ($row = mysqli_fetch_array($results)) {
        echo("<tr>");
        for ($i = 0; $i < (count($row)/2); $i++) {
            echo("<td>");
            echo($row[$i]);
            echo("</td>");
        }
        echo("</tr>");
    }
}