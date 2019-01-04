
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
            <?php
                if (isset($_POST['empName']) && isset($_POST['empNumber']) && isset($_POST['empType'])) {
                    require_once('../php_handlers/creation-functions.php');
                    CreateEmployee($_POST['empNumber'], $_POST['empName'], $_POST['empType'], $dbConnection);
                    require_once('../forms/create-employee.php');
            } else {
                    require_once('../forms/create-employee.php');;
            ?>

        </div>
    </div>
<?php
}
require_once('../footers/footer-main.php');
?>