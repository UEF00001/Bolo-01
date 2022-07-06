(function() {

    $("#cart").on("click", function() {
        $(".shopping-cart").fadeToggle("fast");
        $(".search-menu").fadeOut("fast")
        $(".side-menu-small").fadeOut("fast");
    });

    $("#search").on("click", function() {
        $(".search-menu").fadeToggle("fast");
        $(".shopping-cart").fadeOut("fast");
        $(".side-menu-small").fadeOut("fast");
    });

    $("#side-menu-small").on("click", function() {
        $(".side-menu-small").fadeToggle("fast");
        $(".shopping-cart").fadeOut("fast");
        $(".search-menu").fadeOut("fast")
    });

})();