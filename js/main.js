$ = jQuery.noConflict(); //Fix

var hour_s = '00';
var minutes_s = 59;
var seconds_s = 59;
$(document).ready(function() {
    buy_timer();
    //intialize flickity
    var sliders = [];
    sliders.push($('.opinions-carousel').flickity({
        cellAlign: 'center',
        adaptiveHeight: true,
        prevNextButtons: false,
        resize: true,
        contain: true,
        pageDots: false,
        imagesLoaded: true,
        autoPlay: 5000,
        wrapAround: true
    }));
    sliders.push($('.box-banner-carousel').flickity({
        cellAlign: 'center',
        adaptiveHeight: true,
        prevNextButtons: true,
        resize: true,
        contain: true,
        pageDots: false,
        imagesLoaded: true,
        autoPlay: 5000,
        /*wrapAround: true,*/
        pauseAutoPlayOnHover: false
    }));
    $('.wrapper').imagesLoaded(function() {
        for (index = 0; index < sliders.length; ++index) {
            sliders[index].flickity('resize');
        }
    });
    //mobile menu
    $("#navMenu .mobile-menu").click(function() {
        if (!$("#navMenu ul.menu li").is(":visible")) {
            $("#navMenu .mobile-menu").addClass("is-active");
            $("#navMenu").addClass("open");
            $("#navMenu ul.menu li").slideDown("fast");
        } else {
            $("#navMenu ul.menu li").slideUp("fast", function() {
                $("#navMenu ul.menu li").removeAttr("style");
                $("#navMenu .mobile-menu").removeClass("is-active");
                $("#navMenu").removeClass("open");
            });
        }
    });
    //scroll to order
    $(document).on('click', '.scroll_to', function(event) {
        event.preventDefault();
        var jump = $(this).attr('href');
        var new_position = $(jump).offset();
        $('html, body').stop().animate({ scrollTop: new_position.top }, 500);
    });
    //random order notification
    initRandomOrderNotification();
});


/*--------------------------------------------------------*\
    timer
\*--------------------------------------------------------*/

var hour_s = '00';
var minutes_s = 59;
var seconds_s = 59;

function buy_timer() {
    if (!(minutes_s == '00' && seconds_s == '00')) {
        seconds_s--;
        if (seconds_s == -01) {
            seconds_s = 59;
            minutes_s = minutes_s - 1;
        } else minutes_s = minutes_s;
        if (seconds_s <= 9) seconds_s = "0" + seconds_s;
        minutes_sh = minutes_s;
        if (minutes_s < 10) minutes_sh = '0' + minutes_s;
        $('#time ul').html("<li>" + hour_s + "<div class='podp'>ORE</div>" + "</li><li>" + minutes_sh + "<div class='podp'>MINUTI</div>" + "</li><li>" + seconds_s + "<div class='podp'>SECONDI</div>" + "</li>");
        setTimeout("buy_timer()", 1000);
    } else { //finish
        $(window).scrollTop($('#order_frame').offset().top);
    }
}


/*--------------------------------------------------------*\
    randomOrderNotification
\*--------------------------------------------------------*/

var lastNotify = new Date().getTime();

function randomOrderNotification() {
    var now = new Date().getTime();
    if (now - lastNotify > 20000) {
        var nome = names[Math.floor(Math.random() * names.length)];
        var fullSurName = surNames[Math.floor(Math.random() * names.length)];
        var surName = "";
        //Replace with *
        for (var i = 0; i < fullSurName.length; i++) {
            if (i > 0)
                surName += '*';
            else
                surName += fullSurName[i];
        }
        var time = randomIntFromInterval(2, 30) + " minuti fa"
        $.notify.addStyle('sale-style', {
            html: "<div><i class='icon icon-cart-plus'></i><span class='text'>Nuovo acquisto da <b><span data-notify-text/></b><br><span class='italic'>" + time + "</span></span></div>",
        });
        $.notify(nome + " " + surName, {
            style: 'sale-style',
            position: "bottom left"
        });
        lastNotify = new Date().getTime();
    }
}

function initRandomOrderNotification() {
    var myFunction = function() {
        randomOrderNotification();
        var rand = Math.round(randomIntFromInterval(5000, 15000));
        setTimeout(myFunction, rand);
    }
    myFunction();
}

function randomIntFromInterval(min, max) {
    return Math.floor(Math.random() * (max - min + 1) + min);
}