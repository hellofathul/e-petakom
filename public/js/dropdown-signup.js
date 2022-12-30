var dropdowns_user_role = $(".dropdown-user-role");

// Onclick on a dropdown, toggle visibility
dropdowns_user_role.find("dt").click(function () {
    dropdowns_user_role.find("dd ul").hide();
    $(this).next().children().toggle();
});

// Click handler for dropdown
dropdowns_user_role.find("dd ul li a").click(function () {
    var leSpan = $(this).parents(".dropdown-user-role").find("dt a span");

    // Remove selected class
    $(this).parents(".dropdown-user-role").find('dd a').each(function () {
        $(this).removeClass('selected');
    });

    // Update selected value
    leSpan.html($(this).html());

    // If back to default, remove selected class else addclass on right element
    if ($(this).hasClass('default')) {
        leSpan.removeClass('selected')
    }
    else {
        leSpan.addClass('selected');
        $(this).addClass('selected');
    }

    // Close dropdown
    $(this).parents("ul").hide();
});

// Close all dropdown onclick on another element
$(document).bind('click', function (e) {
    if (!$(e.target).parents().hasClass("dropdown-user-role")) $(".dropdown-user-role dd ul").hide();
});