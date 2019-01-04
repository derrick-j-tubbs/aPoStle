function RunItemSearch() {
    $("#update-search").on('click', 'input', function () {
        var item_query = $("#searchBoxSku").val();
        $.ajax(
            {
                url: '../www/ims_update_item.php',
                method: 'POST',
                data: {
                    item_search: 1,
                    m: item_query
                },
                success: PopulateItemForm(data),
                dataType: 'text'
            }
        );
    });
}

function RunEmployeeSearch() {
    $("#update-search").on('click', 'input', function () {
        var item_query = $("#searchBoxEMP").val();
        $.ajax(
            {
                url: '../www/mgr_update_employee.php',
                method: 'POST',
                data: {
                    item_search: 1,
                    m: item_query
                },
                success: PopulateItemForm(data),
                dataType: 'text'
            }
        );
    });
}
