<?php
require_once('../heads/header-main.php');
require_once('../search_scripts/employee-search.php');
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
            <?php
            require_once('../forms/update-employee.php');
            ?>
        </div>
    </div>
<?php
require_once('../footers/footer-main.php');
?>