function run_searchAC(){
    $("#searchBoxSku").keyup(function () {
        var query = $("#searchBoxSku").val();

        if (query.length > 0) {
            $.ajax(
                {
                    url: '../www/ims_update_item.php',
                    method: 'POST',
                    data: {
                        searchSKU: 1,
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

    $("#searchSkuForm").on('click', 'li', function () {
        var sku = $(this).text();
        $("#searchBoxSku").val(sku);
        $("#response").html("");
    });
}
