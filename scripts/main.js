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

    //number animation
    var number = $('.number-to-animate'), values = [8,1000,10,27];
    for (var i = 0;i < number.length;i++) {
        (function() {
            $(number[i]).numerator({
                toValue: values[i],
                duration: 2000
            });
        })(i);
    }


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
            $('.' + tab).addClass('active');
            currentTab = tab;
        }

    });

    //result of work sort
    var container = $('.documents-container'), data = container.children(),
        date = null, date1 = null,
        dataSortByDate , dataSortByPrice,
        checkedData = false, checkedPrice = false,
        checkbox1 = $('#checkbox1-gr'), checkbox2 = $('#checkbox2-gr');


    var currentData = {};
    currentData = $.extend(true, {}, data);
    function sortByDate(dataCustom) {
        for (var i = 0; i < currentData.length - 1; i++){
            for (var j = 0; j < currentData.length - 1 - i; j++) {
                date = $(currentData[j]).find($('.document-date')).html().split('.');
                date1 = $(currentData[j+1]).find($('.document-date')).html().split('.');
                if (date1[2] > date[2]) {
                    currentData = swap(currentData, j);
                }
                else if (date1[2] === date[2]){
                    if (date1[1] > date[1]) {
                        currentData = swap(currentData, j);
                    }
                    else if (date1[0] > date[0]){
                        currentData = swap(currentData, j);
                    }
                }
            }
        }

        container.html(currentData);
        currentData = $.extend(true, {}, dataSortByDate);
    }
    function swap(obj, i) {
        var temp = obj[i];
        obj[i] = obj[i+1];
        obj[i+1] = temp;
        return obj;
    }


    function sortByPrice() {
        for (var i = 0; i < currentData.length - 1; i++){
            for (var j = 0; j < currentData.length - 1 - i; j++) {
                sum = $(currentData[j]).find($('.sum')).find($('span')).html().split(' ');
                sum1 = $(currentData[j+1]).find($('.sum')).find($('span')).html().split(' ');
                sum.pop();sum1.pop();
                sum = parseInt(sum.join('')); sum1 = parseInt(sum1.join(''));
                if (sum1 > sum) {
                    currentData = swap(currentData, j);
                }
            }
        }
        container.html(currentData);
    }

    function setDefaultContent() {
        container.html(data);
        currentData = $.extend(true, {}, data);
    }

    checkbox1.change(function() {
        if (checkbox2.attr('checked')) {
            checkbox2.trigger('click');
        }
        if(this.checked) {
            sortByDate();
            checkedData = true;
            $(this).attr('checked', true);
        }
        else {
            setDefaultContent();
            checkedData = false;
            $(this).attr('checked', false);
        }
    });
    checkbox2.change(function() {
        if (checkbox1.attr('checked')) {
            checkbox1.trigger('click');
        }
        if(this.checked) {
            sortByPrice();
            checkedPrice = true;
            $(this).attr('checked', true);
        }
        else {
            setDefaultContent();
            checkedPrice = false;
            $(this).attr('checked', false);
        }
    });

    //slider landing
    $('.slider-wrapper').slick({
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: '<button class="slick-prev" type="button"></button>',
        nextArrow: '<button class="slick-next" type="button"></button>',
        responsive: [
            {
                breakpoint: 1400,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    //vertical slider landing
    $('.vertical-slider').slick({
        vertical: true,
        infinite:false,
        slidesToShow: 1,
        slidesToScroll: 1,
        slidesPerRow:2,
        rows:2,
        verticalSwiping: true,
        prevArrow: '<button class="slick-prev" type="button"></button>',
        nextArrow: '<button class="slick-next" type="button"></button>'
    });

    //preview logic in vertical slider
    var preview = $('#preview'),
        thumbContainer = $('.vertical-slider'),
        document = $('.thumb');
    document.click(function () {
        var data = $(this).clone();
        preview.html(data);
        var document = preview.find($('.document-wrapper'));
        document.removeClass('inslider, thumb');
        document.addClass('active');
        document.removeAttr('style');
    });






    //results of work search
    var input = $('#search-gr');
    input.change(function(){
        if (input.val() != '') {
            findDocument(input.val());
            checkbox1.attr('disabled', true);
            checkbox2.attr('disabled', true);
        }
        else {
            setDefaultContent();
            checkbox1.attr('disabled', false);
            checkbox2.attr('disabled', false);
        }
    });
    function findDocument(value) {
        for (var i = 0; i < currentData.length - 1; i++) {
            if (value === $(currentData[i]).find($('.deal-number')).html()) {
                currentData = currentData[i];
                container.html(currentData);
            }
        }
    }
});