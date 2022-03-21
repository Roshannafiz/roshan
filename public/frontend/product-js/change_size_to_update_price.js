// Change Product Sise To Update Price
$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    $("#getPrice").change(function () {
        var size = $(this).val();
        if (size == "") {
            // alert("Please Select A Size");
            return response["final_price"];
        }
        var product_id = $(this).attr("product-id");

        $.ajax({
            type: "post",
            url: "/get-product-price",

            data: {
                size: size,
                product_id: product_id,
            },
            success: function (response) {
                if (response["discount"] > 0) {
                    $(".getAttrPrice").html(
                        "<del>$ " +
                            response["product_price"] +
                            "</del> $" +
                            response["final_price"]
                    );
                } else {
                    $(".getAttrPrice").html("$" + response["product_price"]);
                }
            },
            error: function () {
                alert("ERROR");
            },
        });
    });
});
