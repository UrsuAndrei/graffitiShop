$(document).ready(function () {
    setNavigation();
    url();
    var slide = $(".title_submenu");
    slide.click(function () {
        $(this).next('ul').slideToggle("slow");
        var s = $(this).children('.fa-angle-right');
        s.toggleClass('rotate');
    });
});

function setNavigation() {
    var path = window.location.pathname;
    path = path.match(/([^\/]*)\/*$/)[1];
    path = decodeURIComponent(path);
    console.log(path);
    $("a").each(function () {
        var href = $(this).attr('href');
        if (path === href) {
            $(this).parent().addClass('active');
            var p = $(this).parent().parent().slideDown('slow');
            p.prev().addClass('active');
            $(".active .fa-angle-right").addClass('rotate');
        }
    });
}

function url() {
    $("a[rel='tab']").click(function (pageurl) {
        $(".active").removeClass("active");
        pageurl = $(this).attr('href');
        $.ajax({
            url: pageurl + '?rel=tab', success: function (data) {
                setNavigation();
                $('#content').html(data);
            }
        });
        if (pageurl != window.location) {
            window.history.pushState({path: pageurl}, '', pageurl);
        }
        return false;
    });
    $(window).bind('popstate', function () {
        $.ajax({
            url: location.pathname + '?rel=tab', success: function (data) {
                $('#content').html(data);
            }
        });
    });
}
