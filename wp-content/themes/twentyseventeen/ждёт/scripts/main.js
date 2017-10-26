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
    var container = $('.documents-container'), data = container.children(),
        swapped = false,
        date = null, date1 = null;
    console.log(data);
    for (var i = 0; i < data.length - 1; i++){
        date = $(data[i]).find($('.document-date')).html();
        date1 = $(data[i+1]).find($('.document-date')).html();
        date = date.split('.');
        date1 = date1.split('.');
        if (date[date.length - 1] > date1[date.length - 1]) {
            swap(data[i], data[i+1]);
        }
        else if (date[date.length - 2] > date1[date.length - 2]){
            swap(data[i], data[i+1]);
        }
        else if (date[0] > date1[0]) {
            swap(data[i], data[i+1]);
        }
    }

    function swap(el1, el2) {
        debugger;
        var temp = el1;
        el1 = el2;
        el2 = temp;
        swapped = true;
    }
    container.html(data);

});