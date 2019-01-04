<?php
require_once('../heads/header-employee-search.php');
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
        <?php
                if (isset($_POST['employee_id'])) {
                    require_once('../php_handlers/employee-password-reset.php');
                    PasswordReset($_POST['employee_id'], $dbConnection);
                    require_once('../forms/reset-password-employee.php');
            } else {
                    require_once('../forms/reset-password-employee.php');
            ?>
        </div>
    </div>
<?php
}
require_once('../footers/footer-main.php');
?>