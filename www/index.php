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
            require_once('point-of-sale.php');
            ?>
        </div>
    </div>
<?php
require_once('../footers/footer-main.php');
?>