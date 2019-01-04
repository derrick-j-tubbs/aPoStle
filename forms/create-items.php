<div class="container-padding">
    <!-- Start Row -->
    <div class="row">
        <!-- Start Panel -->
        <div class="col-md-12">
            <div class="panel panel-default">
                <div style="text-align:center" class="panel-title">
                    Inventory Update
                </div>
                <div class="panel-body table-responsive">
                    <table id="example0" class="table display table-striped">
                        <thead class="thead-dark">
                        <tr>
                            <th>SKU</th>
                            <th>UPC</th>
                            <th>Unit Cost</th>
                            <th>% Markup</th>
                            <th>Sales Price</th>
                            <th>Category</th>
                            <th>Color</th>
                            <th>Description</th>
                            <th>QTY</th>
                        </tr>
                        </thead>
                        <tbody>
                        <!-------------------------------------------------------------------------------------------->
                        <!------------------------USE FUNCTION TO INSERT EMPTY ROWS HERE------------------------------>
                        <!-------------------------------------------------------------------------------------------->
                        </tbody>
                    </table>
                    <div style="text-align: center">
                        <button type="submit" class="btn btn-default">Update Inventory</button>
                        <button type="submit" class="btn btn-default">Edit Line</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Panel -->
    </div>
    <!-- End Row -->
</div>
<!--End Table-->
<!--Start Form-->
<div class="container-padding">
    <div class="panel panel-default">
        <div class="row">
            <div class="col-md-12">
                <div style="text-align:center" class="panel-title">
                    New Item
                </div>
                <div class="panel-body form-group">
                    <form name="createItem">
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="inputSKU">SKU</label>
                                <input type="text" class="form-control" id="inputSKU">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputUPC">UPC</label>
                                <input type="text" class="form-control" id="inputUPC">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputDescription">Description</label>
                                <input type="text" class="form-control" id="inputDescription">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <div class="form-group">
                                    <label for="inputCost">Unit Cost</label>
                                    <input type="text" class="form-control" id="inputCost" name="inputCost" onblur="unitToSales()">
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="form-group">
                                    <label for="inputMarkup">Percent Markup</label>
                                    <input type="text" class="form-control" id="inputMarkup" name="inputMarkup" onblur="markupNumCheck()">
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="form-group">
                                    <label for="inputCost">Sales Price</label>
                                    <input type="text" class="form-control" id="inputPrice" name="inputPrice" onblur="salesToUnit()">
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="form-group">
                                    <label for="inputQuantity">Quantity</label>
                                    <input type="text" class="form-control" id="inputQuantity" >
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputCategory">Category</label>
                                <select id="inputCategory" class="form-control">
                                    <?php
                                    require_once('../php_handlers/display-functions.php');

                                    $query = "SELECT * FROM Category";
                                    PopulateSelects('category_id', 'category_description', $query, $dbConnection);
                                    ?>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputColor1">Color 1</label>
                                <select id="inputColor1" class="form-control">
                                    <?php
                                    $query = "SELECT * FROM Color";
                                    PopulateSelects('color_id', 'color_description', $query, $dbConnection);
                                    ?>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputColor2">Color 2</label>
                                <select id="inputColor2" class="form-control">
                                    <option selected value=null>NONE</option>
                                    <?php
                                    PopulateSelects('color_id', 'color_description', $query, $dbConnection);
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div style="text-align:center">
                            <button type="submit" class="btn btn-default">Add Item</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END CONTAINER -->
<!-- //////////////////////////////////////////////////////////////////////////// -->
