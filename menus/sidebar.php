<nav id="sidebar">
    <div id="dismiss">
        <i class="glyphicon glyphicon-arrow-left"></i>
    </div>

    <div class="sidebar-header">
        <img src="../img/logo.png" alt="logo" class="logo">
    </div>
    <?php
    require_once('sidebar-login.php')
    ?>
    <br>
            <ul class="list-group">
                <li class="sidetitle">Welcome <?php echo "User";?> </li>
                <li><hr /></li>
                <li class="list-group-item"><a href="../www/index.php">Point of Sale</a></li>
                <li><hr /></li>
                <li class="groupheader">IMS: </li>
                <li><hr /></li>
                <li class="list-group-item"><a href="../www/ims_create_items.php">Create Items</a></li>
                <li class="list-group-item"><a href="../www/ims_update_item.php">Update Item</a></li>
                <li class="list-group-item"><a href="../www/ims_delete_item.php">Delete Item</a></li>
                <li class="list-group-item"><a href="../www/ims_zero_quantity_report.php">Zero Quantity Report</a></li>
                <li class="list-group-item"><a href="../www/ims_inventory_report.php">Inventory Report</a></li>
                <li class="list-group-item"><a href="../www/ims_out_of_stock_report.php">Out Of Stock Report</a></li>
                <li><br /></li>
                <li class="groupheader">Manage: </li>
                <li><hr /></li>
                <li class="list-group-item"><a href="../www/mgr_create_employee.php">Create User</a></li>
                <li class="list-group-item"><a href="../www/mgr_update_employee.php">Employee Update</a></li>
                <li class="list-group-item"><a href="../www/mgr_reset_password_employee.php">Employee Password Reset</a></li>
                <li class="list-group-item"><a href="../www/mgr_create_color.php">Create Color</a></li>
                <li class="list-group-item"><a href="../www/mgr_create_category.php">Create Category</a></li>
                <li class="list-group-item"><a href="../www/mgr_view_reports.php">Reports</a></li>
                <li class="list-group-item"><a href="../www/mgr_view_gift_cards.php">Gift Cards</a></li>
                <li class="list-group-item"><a href="../www/mgr_view_staff.php">Staffing</a></li>
                <li><hr /></li>
                <li class="sidetitle"><a href=#>Logout</a></li>
                <li><br /></li>
            </ul>
</nav>

