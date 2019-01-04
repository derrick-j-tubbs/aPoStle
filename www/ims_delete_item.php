<?php
require_once('../heads/header-main.php');
require_once('../search_scripts/sku-search.php');
?>
<body onclick="reHide()">
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
            <?php
                if (isset($_POST['empType'])) {
                    require_once('../php_handlers/delete-functions.php');
                    DeleteItem($_POST['empType'], $_POST['empID'], $_POST['empName'], $dbConnection);
                    require_once('../forms/delete-item.php');
            } else {
                    require_once('../forms/delete-item.php');
            ?>
        </div>
    </div>
<?php
}
require_once('../footers/footer-main.php');
?>