<?php
require_once('populate-color-select.php');

for ($i=0; $i < count($color_list); $i++) {
    echo "<OPTION value='$color_list[$i]'>$color_list[$i]</OPTION>'";
}