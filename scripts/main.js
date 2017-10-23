$( document ).ready(function() {
    //menu dropdown animation
    $('.toggler').click(function () {
            $(this).toggleClass('active');
            $('.dropdown-city').slideToggle(250);
        }
    );
    $('.dropdown-point').click(function () {
            $(this).toggleClass('active');
            $(this).find($('.dropdown')).slideToggle(250);
            event.preventDefault();
        }
    );
    //scroll for aside menu
    $(function(){
        $('#content').slimScroll({
            height: 'auto',
            color: '#78c8d6'
        });
    });
    $('.mobile-menu').click(function () {
        $('aside').toggleClass('active');
        $('body').toggleClass('scroll-hidden');
    });

    //scroll to top from bottom
    var $root = $('html, body');

    $('#go-to-top').click(function () {
        $root.animate({
            scrollTop: $('#section1').offset().top
        }, 500);

        return false;
    });


    //three dots to cut text
    $('.content-desc').each(function(index, element) {
        $clamp(element, { clamp: 3, useNativeClamp: false });
    });

    //tabgroup
    var currentTab = "tab-1";
    $('.tab-change').click(function () {
        var tab = $(this).attr('data-tab-name');
        if (currentTab !== tab) {
            $("[data-tab-name='" + currentTab + "']").removeClass('active');
            $('.' + currentTab).removeClass('active');
            $("[data-tab-name='" + tab + "']").addClass('active');
            $('.' + tab).addClass('active')
            currentTab = tab;
        }

    })
});