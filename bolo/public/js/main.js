(function() {
    $("#cart").on("click", function() {
        if ($(this).css("background-color") == "rgb(255, 255, 255)") {
            $(this).css("background-color", "yellow");
        } else {
            $(this).css("background-color", "#fff");
        }
        $(".shopping-cart").fadeToggle("fast");
        $(".search-menu").fadeOut("fast");
        $(".side-menu-small").fadeOut("fast");
    });

    $("#search").on("click", function() {
        if ($(this).css("background-color") == "rgb(255, 255, 255)") {
            $(this).css("background-color", "yellow");
        } else {
            $(this).css("background-color", "#fff");
        }
        $(".search-menu").fadeToggle("fast");
        $(".shopping-cart").fadeOut("fast");
        $(".side-menu-small").fadeOut("fast");
    });

    $("#side-menu-small").on("click", function() {
        if ($(this).css("background-color") == "rgb(255, 255, 255)") {
            $(this).css("background-color", "yellow");
        } else {
            $(this).css("background-color", "#fff");
        }
        $(".side-menu-small").fadeToggle("fast");
        $(".shopping-cart").fadeOut("fast");
        $(".search-menu").fadeOut("fast");
    });
})();