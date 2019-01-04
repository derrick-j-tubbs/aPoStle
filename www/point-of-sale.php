<?php
/**
 * Created by PhpStorm.
 * User: derri
 * Date: 4/5/2018
 * Time: 11:16 AM
 */
?>
<body>
<div class="container-padding">
    <div class="row">
        <!-- Start Panel -->
        <div class="col-md-6">
            <div class="row panel panel-default">
                <?php
                require_once('../pos/SKU-Search-Form.php');
                ?>
            </div>
            <div class="row panel panel-default">
                <?php
                require_once('../pos/transaction-table.php');
                ?>
            </div>
            <div class="row panel panel-default align-items-end">
                <?php
                require_once('../pos/transaction-summary-box.php');
                ?>
            </div>
        </div>
        <div class="col-md-2">
            <?php
            require_once('../pos/category-grid.php');
            ?>
        </div>
        <div class="col-md-4">
            <div class="row panel panel-default">
                <?php
                require_once('../pos/search-box.php');
                ?>
            </div>
            <div class="row">
                <div class="col">
                    <div class="row panel panel-default">
                        <?php
                        require_once('../pos/return-box.php');
                        ?>
                    </div>
                    <div class="row panel panel-default">
                        <?php
                        require_once('../pos/discount-box.php');
                        ?>
                    </div>
                    <div class="row panel panel-default">
                        <?php
                        require_once('../pos/update-box.php');
                        ?>
                    </div>
                    <div class="row panel panel-default">
                        <?php
                        require_once('../pos/total.php');
                        ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
