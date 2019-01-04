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
                if(isset($_POST['categoryName']) && ($_POST['categoryName'] != '')){
                    require_once('../php_handlers/creation-functions.php');
                    CreateCategory($_POST['categoryName'], $dbConnection);
                    require_once('../forms/create-category.php');
            } else {
                    require_once('../forms/create-category.php');
            ?>
        </div>
    </div>
<?php
}
require_once('../footers/footer-main.php');
?>