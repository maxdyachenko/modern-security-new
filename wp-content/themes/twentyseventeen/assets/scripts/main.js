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

    /**/
    $('.menu-item-17 a').on('click', function () {
        $(this).find('.sub-menu').slideToggle('fast');
    });
    
    /*U can tuning slider here*/
    $('.sliderB').slick({
          infinite: true,
          slidesToShow: 3,
          slidesToScroll: 1
    });

    // $(function() {
    // 	var urlIP = 'http://freegeoip.net/json/';
    // 	$.getJSON(urlIP, function (data) {
    // 	        var current = null;
    // 	        current = data.region_name;
    // 	        if(current) {
    // 	            $('.curplace').text(current);
    //             }
    //         }
    //     )
    // })

    const cityMaps = [
        { Moscow: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50812.364515204266!2d37.58600453724103!3d55.74789680166992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54afc73d4b0c9%3A0x3d44d6cc5757cf4c!2z0JzQvtGB0LrQstCwLCDQoNC-0YHRgdC40Y8!5e0!3m2!1sru!2sua!4v1509099234635' },
        { Piter: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d90467.82478724014!2d30.223128321345374!3d59.93089123229761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4696378cc74a65ed%3A0x6dc7673fab848eff!2z0KHQsNC90LrRgi3Qn9C10YLQtdGA0LHRg9GA0LMsINCg0L7RgdGB0LjRjw!5e0!3m2!1sru!2sua!4v1509099359995' },
        { Kazan: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d101449.58000074391!2d48.98393331817258!3d55.81511080884975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x415ead2b7caccd99%3A0x7fcb77b9b5ad8c65!2z0JrQsNC30LDQvdGMLCDQoNC10YHQvy4g0KLQsNGC0LDRgNGB0YLQsNC9LCDQoNC-0YHRgdC40Y8!5e0!3m2!1sru!2sua!4v1509099410402' }
    ];

    $('.choice-sity li a').click(function (e) {
        e.preventDefault();
        $('.curplace').text($(this).text());
        $('.dropdown-city').slideToggle(250);

        /*change map*/
        switch ($('.curplace').text()) {
            case 'г. Москва':
                console.log(cityMaps[0].Moscow);
                $('.mytarget').attr('src', cityMaps[0].Moscow);
                break;
            case 'г. Питер':
                $('.mytarget').attr('src', cityMaps[1].Piter);
                break;
            case 'г. Казань':
                $('.mytarget').attr('src', cityMaps[2].Kazan);
                break;
            default:
                console.log((cityMaps[0].Moscow));
        }
    })

    /**/
});



