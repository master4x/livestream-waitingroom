$("#loginform").click(function () {
    $(".login").fadeToggle("slow");
    $(this).toggleClass("green");
});

$(document).mouseup(function (e) {
    var container = $(".login");

    if (!container.is(e.target) && container.has(e.target).length === 0) {
        container.hide();
        $("#loginform").removeClass("green");
    }
});
