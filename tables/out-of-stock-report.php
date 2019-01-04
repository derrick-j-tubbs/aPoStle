<div class="container-padding">
    <!-- Start Row -->
    <div class="row">
        <!-- Start Panel -->
        <div class="col-md-12">
            <div class="panel panel-default">
                <div style="text-align:center" class="panel-title">
                    Out Of Stock Item Report
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
                            <th>Description</th>
                            <th>QTY</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php require_once('../php_handlers/display-functions.php');
                        $flags = "out_of_stock=1";
                        PrintInventoryReport($flags, $dbConnection);
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- End Panel -->
    </div>
    <!-- End Row -->
</div>