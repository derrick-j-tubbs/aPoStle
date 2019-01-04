<!--Start Form-->
<div class="container-padding">
    <div class="panel panel-default">
        <div class="row">
            <div class="col-md-12">
                <div style="text-align:center" class="panel-title">
                    Reset Employee Password
                </div>
                <div class="panel-body form-group" >
                    <form autocomplete="off" method="post" id="searchEMPForm">
                        <script type="text/javascript">
                            $(document).ready(function () {
                                run_searchEMP();
                            });
                        </script>  
                        <div class="form-group">
                          <label for="input1" class="form-label" >Search Employee by ID</label>
                          <input class="form-control" name="employee_id" type="text" id="searchBoxEMP" onkeydown="unHide()" required="required" value="<?php if (isset($trimmed['employee_id'])) echo $trimmed['employee_id']; ?>"/>
                        <div id="response"></div>     
                        </div>
                        <div style="text-align:center">
                            <button type="button" class="btn btn-default" id="form-submit">Reset Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END CONTAINER -->
<!-- //////////////////////////////////////////////////////////////////////////// -->
