<?php
/**
 * Created by PhpStorm.
 * User: derri
 * Date: 4/5/2018
 * Time: 10:07 PM
 */
?>

<form id="item-search">
    <div class="form-group col">
        <label for="search-by" class="row form-label">Search By: &nbsp;&nbsp;</label>
        <div class="col">
            <select id="search-by" class="form-control col">
                <?php
                // insert logic to populate this from our category table
                ?>
                <option selected>Choose...</option>
                <option>Category</option>
                <option>Color</option>
                <option>Description</option>
            </select>
        </div>
    </div>
    <div class="form-group col">
        <label for="search-for" class="row form-label">Search For: &nbsp;&nbsp;</label>
        <div class="col">
            <input type="text" id="search-for" class="form-control col">
        </div>
    </div>
    <div class="col">
        <button type="button" class="btn btn-default">Search</button>
    </div>
</form>