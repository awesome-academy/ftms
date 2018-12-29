$(function() {
    var $dropDownMenu = $(".avatar-dropdown-menu");

    $dropDownMenu.click(function(e) {
        e.stopPropagation();

        $(document).on("click", menuCloseListener);

        toggleMenu();
    });

    var toggleMenu = function() {
        $dropDownMenu.toggleClass("open");
    }

    var menuCloseListener = function() {
        toggleMenu();

        $(document).off("click", menuCloseListener);
    }
});

//image upload
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});
