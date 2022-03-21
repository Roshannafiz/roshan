$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    // Update Cart Items
    $(document).on("click", ".btnItemUpdate", function () {
        if ($(this).hasClass("qtyMinus")) {
            // If User Click Quantity Minus Button
            var quantity = $(this).prev().val();
            if (quantity <= 1) {
                alert("Item Quantity Must Be 1");
                return false;
            } else {
                new_qty = parseInt(quantity) - 1;
            }
        }

        if ($(this).hasClass("qtyPlus")) {
            // If User Click Quantity Plus Button
            var quantity = $(this).prev().prev().val();
            new_qty = parseInt(quantity) + 1;
        }
        var cartid = $(this).data("cartid");

        $.ajax({
            type: "post",
            url: "/update-cart-item-qty",
            data: {
                cartid: cartid,
                qty: new_qty,
            },
            success: function (response) {
                if (response.status == false) {
                    alert(response.message);
                }
                $("#AppendCartItems").html(response.view);
            },
            error: function () {
                alert("Error");
            },
        });
    });

    // Delete Cart Items
    $(document).on("click", ".btnItemDelete", function () {
        var cartid = $(this).data("cartid");

        $.ajax({
            type: "post",
            url: "/delete-cart-item",
            data: {
                cartid: cartid,
            },
            success: function (response) {
                $("#AppendCartItems").html(response.view);
            },
            error: function () {
                alert("Error");
            },
        });
    });

    // Delete Wishlist Item
    $(document).on("click", ".wishlistItemDelete", function () {
        var wishlistid = $(this).data("wishlistid");
        $.ajax({
            type: "post",
            url: "/delete-wishlist-item",
            data: {
                wishlistid: wishlistid,
            },
            success: function (response) {
                $("#AppendWishlistItems").html(response.view);
            },
            error: function () {
                alert("Error");
            },
        });
    });
});
