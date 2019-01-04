<!--Start Form-->
<div class="container-padding">
    <div class="panel panel-default">
        <div class="row">
            <div class="col-md-12">
                <div style="text-align:center" class="panel-title">
                    Delete Item
                </div>
                <div class="panel-body form-group" >
                    <form autocomplete="off" method="post" id="searchSkuForm" action="ims_delete_item.php">
                        <script type="text/javascript">
                            $(document).ready(function () {
                                run_searchAC();
                            });
                        </script>
                        <div class="form-group">
                            <label for="searchBoxSku" class="form-label" >Search SKU</label>
                            <input class="form-control" name="searchBoxSku" type="text" id="searchBoxSku" onkeydown="unHide()" required="required" value="<?php if (isset($trimmed['sku'])) echo $trimmed['sku']; ?>"/>
                            <div id="response"></div>
                        </div>
                        <div style="text-align:center">
                            <input type="submit" class="btn btn-default" id="update-search" name="update-search" value="Search Item" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END CONTAINER -->
<!-- //////////////////////////////////////////////////////////////////////////// -->
<?php
require_once('../php_handlers/php_helpers.php');

if (isset($_POST['searchBoxSku'])) {
    require_once('../search_scripts/item-search.php')
?>
    <!--Start Form-->
    <div class="container-padding" id="item-form">
        <div class="panel panel-default">
            <div class="row">
                <div class="col-md-12">
                    <div style="text-align:center" class="panel-title">
                        Delete Item
                    </div>
                    <div class="panel-body form-group">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="ioSKU">SKU</label>
                                    <input type="text" class="form-control" id="ioSKU" name="ioSKU"
                                           value="<?php echo($sku); ?>" disabled>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="ioUPC">UPC</label>
                                    <input type="text" class="form-control" id="ioUPC"
                                           value="<?php echo($upc); ?>" disabled>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="ioDescription">Description</label>
                                    <input type="text" class="form-control" id="ioDescription"
                                           value="<?php echo($description); ?>" disabled>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <div class="form-group">
                                        <label for="ioCost">Unit Cost</label>
                                        <input type="text" class="form-control" id="ioCost"
                                               value="<?php echo($cost); ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <div class="form-group">
                                        <label for="ioMarkup">Percent Markup</label>
                                        <input type="text" class="form-control" id="ioMarkup"
                                               value="<?php echo($percent_markup); ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <div class="form-group">
                                        <label for="ioPrice">Sales Price</label>
                                        <input type="text" class="form-control" id="ioPrice"
                                               value="<?php echo($price); ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <div class="form-group">
                                        <label for="ioQuantity">Quantity</label>
                                        <input type="text" class="form-control" id="ioQuantity"
                                               value="<?php echo($quantity); ?>" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="ioCategory">Category</label>
                                    <select id="ioCategory" class="form-control" disabled>
                                        <?php
                                        require_once('../php_handlers/display-functions.php');

                                        $query = "SELECT * FROM Category";
                                        PopulateSelects('category_id', 'category_description', $query, $dbConnection);
                                        echo("<option selected value='" . $category_id . "'>" . $category_description . "</option>");
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="ioColor1">Color 1</label>
                                    <select id="ioColor1" class="form-control" disabled>
                                        <?php
                                        $query = "SELECT * FROM Color";
                                        PopulateSelects('color_id', 'color_description', $query, $dbConnection);
                                        echo("<option selected value='" . $color1ID . "'>" . $color1Name . "</option>");
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="ioColor2">Color 2</label>
                                    <select id="ioColor2" class="form-control" disabled>
                                        <option selected value="">N/A</option>
                                        <?php
                                        PopulateSelects('color_id', 'color_description', $query, $dbConnection);
                                        echo("<option selected value='" . $color2ID . "'>" . $color2Name . "</option>");
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div style="text-align:center">
                                <button type="submit" class="btn btn-default" id="update-item">Delete Item</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END CONTAINER -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <?php
}