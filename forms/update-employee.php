<div class="container-padding">
    <div class="panel panel-default">
        <div class="row">
            <div class="col-md-12">
                <div style="text-align:center" class="panel-title">
                    Update Employee
                </div>
                <div class="panel-body form-group">
                    <form autocomplete="off" method="post" id="searchEMPForm" action="mgr_update_employee.php">
                        <script type="text/javascript">
                            $(document).ready(function () {
                                run_searchEMP();
                            });
                        </script>
                        <div class="form-group">
                            <label for="searchBoxEMP" class="form-label">Search Employee by ID</label>
                            <input class="form-control" name="searchBoxEMP" type="text" id="searchBoxEMP"
                                   onkeydown="unHide()" required="required"
                                   value="<?php if (isset($_POST['searchBoxEMP'])) {
                                       $old_id = $_POST['searchBoxEMP'];
                                       echo $old_id;
                                   } ?>"/>
                            <div id="response"></div>
                        </div>
                        <div style="text-align:center">
                            <input type="submit" class="btn btn-default" id="update-search" name="update-search"
                                   value="Search Employees"/>
                        </div>
                        <?php
                        require_once('../php_handlers/php_helpers.php');
                        if (isset($_POST['update-employee'])) {
                            require_once('../php_handlers/update-functions.php');
                            $user_level = $_POST['empType'];
                            $employee_id = $_POST['empID'];
                            $employee_name = $_POST['empName'];
                            UpdateEmployee($user_level, $employee_id, $employee_name, $old_id, $dbConnection);
                        }
                        if (isset($_POST['update-search'])) {
                        require_once('../search_scripts/employee-form-search.php');

                        ?>
                        <div class="panel-body form-group">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="empType">Employee Type</label>
                                    <select id="empType" name="empType" class="form-control">
                                        <option value="0">Employee</option>
                                        <option value="1">Manager</option>
                                        <?php
                                        if ($user_level == 0)
                                            echo("<option selected value='0'>Employee</option>");
                                        else
                                            echo("<option selected value='1'>Manager</option>");
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="empID">Employee ID</label>
                                    <input type="text" class="form-control" id="empID" name="empID"
                                           value="<?php echo($employee_id); ?>">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <div class="form-group">
                                        <label for="empName">Employee Name</label>
                                        <input type="text" class="form-control" id="empName" name="empName"
                                               value="<?php echo($employee_name); ?>">
                                    </div>
                                </div>
                            </div>
                            <div style="text-align:center">
                                <button type="submit" name="update-employee" id="update-employee"
                                        class="btn btn-default">Update Employee
                                </button>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END CONTAINER -->
<!-- //////////////////////////////////////////////////////////////////////////// -->