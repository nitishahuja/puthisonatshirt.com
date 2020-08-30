$(document).ready(function(){
    $(".bestseller .owl-carousel").owlCarousel({
        loop:true,
        nav:true,
        margin:0,
        dots:true,
        responsive:{
            0:{
                 items:2,
                 nav:true,
                 button:true
             },
             600:{
                 items:3,
                 nav:true,
                 button:true
             },
             1000:{
                 items:5,
                 nav:true,
                 loop:true,
                 button:true
             }
        }
    })
    $(".fan_love").owlCarousel({
        margin:0,
        nav:false,
        dots:false,
        center:true,
        responsive:{
            0:{
                items:1,
                button:true,
                loop:false
            },
            600:{
                items:1,
                button:true,
                loop:false
            },
            1000:{
                items:1,
                loop:false,
                button:true
            }
        }
    })

})