/**
 * Created by omar on 18/05/2015.
 */

var compteur=0;

$("#browseProduct2").click(function(){
    compteur++;
    console.log("marche");
    if(compteur==1){
        $(".spinner").show();
        document.querySelectorAll(".spinner > div")[0].style.WebkitAnimation="bouncedelay 1.4s ease-in-out -0.32s 3 both";
        document.querySelectorAll(".spinner > div")[1].style.WebkitAnimation="bouncedelay 1.4s ease-in-out -0.16s 3 both";
        document.querySelectorAll(".spinner > div")[2].style.WebkitAnimation="bouncedelay 1.4s ease-in-out  3 both";
        setTimeout(function(){
            document.querySelectorAll(".spinner")[0].style.display="none";
            $("#deuxiemme_page").slideDown(1000);
        },"3800");


        compteur++;
    }
    if(compteur==3){
        $(".spinner").show();
        document.querySelectorAll(".spinner > div")[0].style.WebkitAnimation="bouncedelay 1.4s ease-in-out -0.32s 3 both";
        document.querySelectorAll(".spinner > div")[1].style.WebkitAnimation="bouncedelay 1.4s ease-in-out -0.16s 3 both";
        document.querySelectorAll(".spinner > div")[2].style.WebkitAnimation="bouncedelay 1.4s ease-in-out  3 both";
        setTimeout(function(){
            document.querySelectorAll(".spinner")[0].style.display="none";
            $("#troisiemme_page").slideDown(1000);
            $("#browseProduct2").hide()
        },"3800");
    }


});

//    ********************aside rotate icon menu search bar***************



var parite2 = 0, parite = 0, deg = 0;

<!--**********facebook share button**************-->
(function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.3";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
<!--**********************************************-->

$("#span2").click(function () {
    console.log("marche");
    if (parite2 % 2 == 0) {
        $(".searchbar").slideDown();
        parite2++;
    }
    else {
        $(".searchbar").slideUp();
        parite2++;
    }
});
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
