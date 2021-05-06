$(document).ready(function () {


/*
    var myCarousel = document.querySelector('#myCarousel');
    var carousel = new bootstrap.Carousel(myCarousel, {
        interval: 3000
        
      })

    window.onscroll = function () {
        scrolla()
    };

    function scrolla() {
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {

            $("#idnav").removeClass("nav-border");

        } else {
            if (nav_open) {
                $("#idnav").addClass("nav-border");
            }
        }
    }
  
*/



    //MENU Overlay

    $("#idmenu").on('click', function () {
        open_close_Nav();
    });

    var t1 = gsap.timeline();

    t1.pause();
    t1.to("#menu", {
        top: "0%",
        duration: 1,
        ease: Expo.easeOut
    });

    t1.from(".menu-overlay-content ul li", {
        y: 400,
        stagger: 0.1,
        duration: 0.5,
        opacity: 0,
        delay: -0.5,
        ease: Expo.easeOut
    });


    var t2 = gsap.timeline();

    t2.pause();

    t2.to(".menu-overlay-content ul li", {
        x: 0,
        opacity: 1

    });
    t2.to(".menu-overlay-content ul li", {
        y: -400,
        stagger: 0.1,
        duration: 0.5,
        opacity: 0,
        delay: 0,
        ease: Expo.easeOut
    });


    t2.to("#menu", {
        top: "-100%",
        duration: 1,
        delay: -0.5,
        ease: Expo.easeOut
    });



    nav_open = true;

    function open_close_Nav() {

        var attive = t1.isActive();
        if (!attive) {

            if (nav_open) {
                $("#id-menu").toggleClass( "active" );
                $("svg").addClass("active");
                
                
                t1.restart();
                
                $("#idnav").removeClass("nav-border");

                nav_open = false;

            } else {
                t2.restart();
                $("#idnav").addClass("nav-border");
                $(".ham").removeClass("active");
                nav_open = true;
            }
        }
    }

});