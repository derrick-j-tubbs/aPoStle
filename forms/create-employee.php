<!--Start Form-->
<div class="container-padding">
    <div class="panel panel-default">
        <div class="row">
            <div class="col-md-12">
                <div style="text-align:center" class="panel-title">
                    New User
                </div>
                <div class="panel-body form-group">
                    <form action="mgr_create_employee.php" method="post">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputCategory">Employee Type</label>
                                <select id="empType" name="empType" class="form-control">
                                    <option selected value="0">Regular</option>
                                    <option value="1">Management</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="empName">Employee First Name</label>
                                <input type="text" class="form-control" id="empName" name="empName">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="empNumber">Employee Number</label>
                                <input type="text" class="form-control" id="empNumber" name="empNumber">
                            </div>
                        </div>
                        <div style="text-align:center">
                            <input type="submit" class="btn btn-default" value="Create Employee" name="empCreate" id="empCreate" />
                        </div>
                        <a>NOTE: Upon first time logging in, employee will be prompted to change password and create security questions.</a>
                    </form>
                </div>
                <?php
                    if (isset($_GET['message'])) {
                    $message = $_GET['message'];
                    if ($message == "success") {
                         echo '<p class="alert-box success">
                              <span>success: </span>
                              Your user has been created successfully. 
                              <br><br> 
                              <a href="mgr_create_employee.php">Close</a>
                              </p>';
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</div>
<!-- END CONTAINER -->
<!-- //////////////////////////////////////////////////////////////////////////// -->
