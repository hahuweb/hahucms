
/**
 * Menu
 * 
 * Main java script file and styles.
 */


// Image models selected 
function myCourseFunction(course) {
    document.getElementById("result").value = course;
    document.getElementById("lb-img").src = course;
}

// preloader
$(window).on('load', function () {
    $(".preloader").animate({
        'opacity': '0'
    }, 600, function () {
        setTimeout(function () {
            $(".preloader").css("visibility", "hidden").fadeOut();
        }, 300);
    });
});

$('document').ready(function () {

    // select media
    $('input[type="radio"]').on('click', function () {
        var src = $(this).val();
        $(".lb-img").attr("src", src);
        $("#result").val(src);
    });

    // password generate
    $('.generate').on('click', function () {

        var chars = "0123456789abcdefghijklmnopqrstuvwxyz!@#$%^&*()_+~\\`|}{[]:;?><,./-=ABCDEFGHIJKLMNOPQRSTUVWXYZ"
        var passwordLength = 14;
        var password = "";

        for (var i = 0; i <= passwordLength; i++) {
            var randomNumber = Math.floor(Math.random() * chars.length);
            password += chars.substring(randomNumber, randomNumber + 1);
        }
        $("#password").val(password);
        $("#ps-result").text(password);
        $("#re-password").val(password);

    });

    // side toggler
    $('.side-toggler').on('click', function () {
        $('.side-menu').css({
            "width": "250px",
            "z-index": "2200",
            "transition": "0.5s"
        });
        $('.overlay').show();
    });
    $('.overlay').on('click', function () {
        $('.side-menu').css({
            "width": "0%",
            "transition": "0.5s"
        });
        $(this).hide();
    });

    // dark & light mode
    var darkMode;
    if (localStorage.getItem('dark-mode')) {
        darkMode = localStorage.getItem('dark-mode');
    } else {
        darkMode = 'light';
    }

    localStorage.setItem('dark-mode', darkMode);

    if (localStorage.getItem('dark-mode') == 'hw-dark') {
        $('body').addClass('hw-dark');
        $('.dark-button').hide();
        $('.light-button').show();
        $('.table').removeClass('table-striped');
        $('.table').addClass('table-dark');
    }

    $('.dark-btn').on('click', function () {
        $('.dark-btn').hide();
        $('.light-btn').show();
        $('body').addClass('hw-dark');
        $('.table').removeClass('table-striped');
        $('.table').addClass('table-dark');
        $('.light-btn').prop("checked", true);
        localStorage.setItem('dark-mode', 'hw-dark');
    });

    $('.light-btn').on('click', function () {
        $('.light-btn').hide();
        $('.dark-btn').show();
        $('body').removeClass('hw-dark');
        $('.table').removeClass('table-dark');
        $('.table').addClass('table-striped');
        $('.dark-btn').prop("checked", false);
        localStorage.setItem('dark-mode', 'light');
    });


    // short & long sidebar
    var shortSidebar;
    if (localStorage.getItem('short-mode')) {
        shortSidebar = localStorage.getItem('short-mode');
    } else {
        shortSidebar = 'sidebar';
    }
    localStorage.setItem('short-mode', shortSidebar);
    if (localStorage.getItem('short-mode') == 'short') {
        $('body').addClass('short');
        $('.side-toggle').hide();
        $('.side-staggered').show();
    }
    $('.side-toggle').on('click', function () {
        $('.side-menu, #page-content').css({
            "transition": "0.5s"
        });
        $('.side-toggle').hide();
        $('.side-staggered').show();
        $('body').addClass('short');
        localStorage.setItem('short-mode', 'short');
    });

    $('.side-staggered').on('click', function () {
        $('.side-menu, #page-content').css({
            "transition": "0.5s"
        });
        $('.side-staggered').hide();
        $('.side-toggle').show();
        $('body').removeClass('short');
        localStorage.setItem('short-mode', 'sidebar');
    });

    // avatar 
    var intials = $('.username').text().charAt(0);
    var profileImage = $('.profileImg').text(intials);

    var intialsone = $('.user_name').text().charAt(0);
    var profile_img = $('.profile_Img').text(intialsone);


    // file count
    $('.checkbox').on('click', function () {

        if ($(this).is(":checked")) {
            $('.btn-delete').show();
        }

    });

    var $checkboxes = $('#media_form input[type="checkbox"]');
    $checkboxes.change(function () {
        var countCheckedCheckboxes = $checkboxes.filter(':checked').length;
        $('.badge').text(countCheckedCheckboxes);

    });

    // image filter
    $(".img_search").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $(".modal .card").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });

    // Trumbowyg
    $('#trumbowyg-demo').trumbowyg();

});
