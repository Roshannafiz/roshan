$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    $(".updateWishlist").click(function () {
        var product_id = $(this).data("productid");
        $.ajax({
            type: "post",
            url: "/update-wishlist",
            data: {
                product_id: product_id,
            },
            success: function (response) {
                // console.log(response);
                // return false;
                if (response.action == "add") {
                    $("button[data-productid=" + product_id + "]").html(
                        '<i class="fa fa-heart"</i>'
                    );
                } else {
                    $("button[data-productid=" + product_id + "]").html(
                        '<i class="far fa-heart"></i>'
                    );
                }
            },
            error: function () {
                alert("Error");
            },
        });
    });
});
