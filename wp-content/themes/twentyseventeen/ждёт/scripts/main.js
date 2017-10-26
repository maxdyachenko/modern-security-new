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
    $('.content-desc').find($('p')).each(function(index, element) {
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

    //result of work sort
    var data = $('.documents-container').children(),
        swapped = false,
        date = null, date1 = null;
    for (var i = 0; i < data.length - 1; i++){
        date = $(data[i]).find($('.date')).html();
        date1 = $(data[i+1]).find($('.date')).html();
        debugger;
        if (date > date1) {
            var temp = data[i];
            data[i] = data[i+1];
            data[i+1] = temp;
            swapped = true;
        }
    }

});