// Products Attributes Add/Remove Scripts
$(document).ready(function () {
    var maxField = 10; //Input fields increment limitation
    var addButton = $(".add_button"); //Add button selector
    var wrapper = $(".field_wrapper"); //Input field wrapper
    var fieldHTML =
        '<div style="margin-bottom: 60px"><input type="text" name="size[]" style="width: 120px; margin-left: 10px; margin-bottom: 20px;" placeholder="Size"/><input id="color" type="text" name="color[]" value=""style="width: 120px; margin-left: 10px; margin-bottom: 20px;"placeholder="Color" required /><input type="text" name="sku[]" style="width: 120px; margin-left: 13px; margin-bottom: 20px;" placeholder="Sku"/><input type="text" name="price[]" style="width: 120px; margin-left: 13px; margin-bottom: 20px;" placeholder="Price"/><input type="text" name="stock[]" style="width: 120px; margin-left: 14px; margin-bottom: 20px;" placeholder="Stock"/><a href="javascript:void(0);" class="remove_button ml-3 btn btn-success btn-sm">Remove</a></div>'; //New input field html
    var x = 1; //Initial field counter is 1

    //Once add button is clicked
    $(addButton).click(function () {
        //Check maximum number of input fields
        if (x < maxField) {
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });

    //Once remove button is clicked
    $(wrapper).on("click", ".remove_button", function (e) {
        e.preventDefault();
        $(this).parent("div").remove(); //Remove field html
        x--; //Decrement field counter
    });
});
