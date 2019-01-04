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
                if (isset($_POST['ioSKU']) || isset($_POST['ioUPC']) || isset($_POST['ioDescription']) || isset($_POST['ioCost']) || isset($_POST['ioMarkup']) || isset($_POST['ioPrice']) || isset($_POST['ioQuantity']) || isset($_POST['ioCategory']) || isset($_POST['ioColor1']) || isset($_POST['ioColor2'])) {
                    require_once('../php_handlers/update-functions.php');
                    UpdateItem($_POST['ioSKU'], $_POST['ioUPC'], $_POST['ioDescription'], $_POST['ioCost'], $_POST['ioMarkup'], $_POST['ioPrice'], $_POST['ioQuantity'], $_POST['ioCategory'], $_POST['ioColor1'], $_POST['ioColor2'], $dbConnection);
                    require_once('../forms/update-item.php');
            } else {
                    require_once('../forms/update-item.php');
            ?>
        </div>
    </div>
<?php
}
require_once('../footers/footer-main.php');
?>