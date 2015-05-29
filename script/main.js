/**
 * Created by omar on 11/05/2015.
 */

var parite=0;
var parite2=0;
var deg=0;


window.onload=function(){
    console.log("d�marrage");
    console.log(window.pageYOffset);
    $('#bottom_slide2').hide();

};

function animMenu() {
    console.log("marche");
    a = document.getElementById("menuicon");
    if (parite % 2 == 0) {
        z = setInterval(function () {
            a.style.transform = 'rotate(' + deg + 'deg)';
            deg = deg + 1;
            console.log(deg);
            if (deg == 90) {

                clearInterval(z);

            }
        }, 2);
        parite++;
        $('.menu').slideDown();
    }
    else {
        z = setInterval(function () {
            a.style.transform = 'rotate(' + deg + 'deg)';
            deg = deg - 1;
            console.log(deg);
            if (deg == 0) {
                clearInterval(z);
            }
        }, 2);
        parite++;
        $('.menu').slideUp();
    }

}


//*********************Fonction Afficher/Cacher SearchBar*****************************

$("#span2").click(function () {
    if (parite2 % 2 == 0) {
        $(".searchbar").slideDown();
        parite2++;
    }
    else {
        $(".searchbar").slideUp();
        parite2++;
    }

});

//**************Fonction Scroller *************************

$('#scrolldown').click(function(){
    console.log("marche");
    $('#i_scrolldown').css('transform', 'rotate(180deg)');
    var the_id = $(this).attr("href");
        $('html, body').animate({
            scrollTop:$(the_id).offset().top
        }, 'slow');
    return false;
});
$('#i_scrollup3').click(function(){
    $('#slide3').css('display', 'none');
});
$('#i_scrollup2').click(function(){
    $('#slide2').css('display', 'none');
    $('#bottom_slide2').hide();
});
/*******************google maps***************************/

function google_map(){
    var LL = new google.maps.LatLng(37.794957, -122.402836);
    var options = {
        center: LL,
        zoom: 17
    };
    var map = new google.maps.Map(document.getElementById('map-canvas'), options);
    var marker = new google.maps.Marker({
        position: LL,
        map: map,
        title: 'CALIFORNIA'
    });
}
google.maps.event.addDomListener(window, 'load',google_map);

/****************ancrer slide****************************/


$('#menu_up3').click(function(){
    console.log("coucou :)");
    $('#slide3').slideDown(1000, 'swing');
    $('html, body').animate({
        scrollTop:$("#slide3").offset().top
    }, 'slow');
    google_map();
});
$('#menu_up2').click(function(){
    console.log("coucou :)");
    $('#slide2').slideDown(1000, 'swing');
    $('html, body').animate({
        scrollTop:$("#slide2").offset().top
    }, 'slow');
    $('#bottom_slide2').show(2000, 'swing');
});










