<!--Start Form-->
<div class="container-padding">
    <div class="panel panel-default">
        <div class="container-padding">
    <!-- Start Row -->
    <div class="row">
        <!-- Start Panel -->
        <div class="col-md-12">
            <div class="panel panel-default">
                <div style="text-align:center" class="panel-title">
                    Employee List
                </div>
                <div class="panel-body table-responsive">
                    <table id="example0" class="table display table-striped">
                        <thead class="thead-dark">
                        <tr>
                            <th>Employee ID</th>
                            <th>Employee Type</th>
                            <th>Employee Name </th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        require_once('../php_handlers/display-functions.php');
                        PrintEmployees($dbConnection);
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
</div>
</div>
<!-- END CONTAINER -->
<!-- //////////////////////////////////////////////////////////////////////////// -->
