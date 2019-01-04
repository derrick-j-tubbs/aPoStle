<?php
$sku = $upc = $description = $cost = $percent_markup = $price = $quantity = $category_id = $category_description = $color1ID = $color2ID = $color1Name = $color2Name = "";

$search_sku = $_POST['searchBoxSku'];

$query =
    "SELECT sku, upc, description, cost, percent_markup, price, quantity, Category.category_id, category_description " .
    "FROM Item JOIN Category ON Item.category_id = Category.category_id " .
    "WHERE Item.sku = $search_sku";
$result = QueryRunner($query, $dbConnection);

$row = mysqli_fetch_array($result);
$sku = $row['sku'];
$upc = $row['upc'];
$description = $row['description'];
$cost = $row['cost'];
$percent_markup = $row['percent_markup'];
$price = $row['price'];
$quantity = $row['quantity'];
$category_id = $row['category_id'];
$category_description = $row['category_description'];

$color_query = "SELECT Item_Color.color_id, color_description FROM Item_Color JOIN Color ON Item_Color.color_id = Color.color_id WHERE sku=$search_sku LIMIT 2";

$result = QueryRunner($color_query, $dbConnection);

$colorRow = mysqli_fetch_assoc($result);
$color1ID = $colorRow['color_id'];
$color1Name = $colorRow['color_description'];

$colorRow = mysqli_fetch_assoc($result);
$color2ID = $colorRow['color_id'];
$color2Name = $colorRow['color_description'];