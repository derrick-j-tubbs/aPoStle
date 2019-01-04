<!--Start Form-->
<div class="container-padding">
    <div class="panel panel-default">
        <div class="row">
            <div class="col-md-12">
                <div style="text-align:center" class="panel-title">
                    New Category
                </div>
                <div class="panel-body form-group" >
                    <form name="create-category" action="mgr_create_category.php" method="post">
                        <div class="form-row" >
                            <div class="form-group col-md-6" style="margin:0 auto; padding-bottom:20px;">
                                <label for="categoryName">Color Description</label>
                                <input type="text" class="form-control" id="categoryName" name="categoryName">
                            </div>
                        </div>
                        <div style="text-align:center">
                            <input type="submit" class="btn btn-default" name="createCategory" id="createCategory" value="Create Category" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END CONTAINER -->
<!-- //////////////////////////////////////////////////////////////////////////// -->
