$(document).ready(function(){
// owl-carousel
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
    });

    // fanove_owl carousel
    $(".fanlove .owl-carousel").owlCarousel({
        loop:true,
        nav:false,
        dots:true,
        autoplay:true,
        autoplayTimeout:3000,
        margin:0,
        responsive:{
            0:{
                items:1,
                dots:true
            },
            600:{
                items:1,
                dots:true
            },
            1000:{
                items:1,
                dots:true
            }
        }
    });

    // quantity 
            var quantity=0;
            $('.quantity-right-plus').click(function(e){
                e.preventDefault();
                var quantity = parseInt($('.qlt').val());
                if(quantity<10){
                $('.qlt').val(quantity + 1);
                }
            });

            $('.quantity-left-minus').click(function(e){
                e.preventDefault();
                var quantity = parseInt($('.qlt').val());
                if(quantity>1){
                $('.qlt').val(quantity - 1);
                } 
        });
});