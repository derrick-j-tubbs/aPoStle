<link rel="stylesheet" href="../css/reports-style.css">
<?php
require_once('../heads/header-main.php');
?>
<body>
<div class="wrapper">
    <div>
        <?php
        require_once('../menus/sidebar.php');
        ?>
        <!-- Page Content Holder -->
        <div class="overlay"></div>
        <div id="content">
            <div class="container-fluid">
                <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                    <i class="fa fa-bars"></i>
                </button>
            </div>
        <!--Point of Sale-->
            <div class="container-padding">
                <div class="panel panel-default">
                    <div class="row">
                        <div class="col-md-12">
                            <div style="text-align:center" class="panel-title">
                                View Sales Reports
                            </div>
                            <div class="panel-body form-group" >
                                <form >
                                    <div class="form-row" >
                                        <div class="form-group col-md-6" >
                                            <label for="inputSKU">Select Range</label>
                                            <select id="inputCategory" class="form-control">
                                                <option selected>Daily</option>
                                                <option>Weekly</option>
                                                <option>Monthly</option>
                                            </select>
                                        </div>
                                        <?php
                                        //Use logic to figure which version we are displaying
                                        require_once('../tables/daily-sales-reports.php');
                                        //require_once('../tables/weekly-sales-reports.php');
                                        //require_once('../tables/monthly-sales-reports.php');
                                        ?>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
require_once('../footers/footer-main.php');
?>