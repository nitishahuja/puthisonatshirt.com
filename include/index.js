$(document).ready(function(){

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

    // owl-carousel
    $(".bestseller .owl-carousel").owlCarousel({
        loop:false,
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

    

    // quantity 
        let $qty_down = $('.quantity-left-minus');
        let $qty_up = $('.quantity-right-plus');
        // let $input = $('.qty')

        // click on qty_up button
        $qty_up.click(function(e){
            let $input = $(`.qty[data-id='${$(this).data("id")}']`); 
            if($input.val()>=1 && $input.val()<=9){
                $input.val(function(i,oldval){
                    return ++oldval;
                });
            }
        });
        // click on qty_down button
        $qty_down.click(function(e){
            let $input = $(`.qty[data-id='${$(this).data("id")}']`); 
            if($input.val()>1 && $input.val()<=10){
                $input.val(function(i,oldval){
                    return --oldval;
                });
            }
        });
        // navbar search 
        $('#search').click(function(){
            $('.menu-item').addClass('hide-item')
            $('.search-form').addClass('active')
            $('.close').addClass('active')
            $('#search').hide()
          });
          $('.close').click(function(){
            $('.menu-item').removeClass('hide-item')
            $('.search-form').removeClass('active')
            $('.close').removeClass('active')
            $('#search').show()
          });
   
          
    //        // isotope filter
    // var $grid = $(".products").isotope({
    //     itemSelector : ".product-card"
    // });

    // // filter items on button click
    // $(".button-group").on("click", "button", function(){
    //     var filterValue = $(this).attr('data-filter');
    //     $grid.isotope({ filter: filterValue});
    // });
});