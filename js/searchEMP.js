function run_searchEMP(){
    $("#searchBoxEMP").keyup(function () {
        var query = $("#searchBoxEMP").val();

        if (query.length > 0) {
            $.ajax(
                {
                    url: '../www/mgr_update_employee.php',
                    method: 'POST',
                    data: {
                        searchEMP: 1,
                        q: query
                    },
                    success: function (data) {
                        $("#response").html(data);
                    },
                    dataType: 'text'
                }
            );
        }
    });

    $("#searchEMPForm").on('click', 'li', function () {
        var employee_id = $(this).text();
        $("#searchBoxEMP").val(employee_id);
        $("#response").html("");
    });
}