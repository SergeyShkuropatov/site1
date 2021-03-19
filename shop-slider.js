jQuery(document).ready(function($){

   var shopSlider=$("#shopSleder");

// инициализирует текущую страницу и общееколичество страниц
   
   shopSlider.on('initialize.owl.carousel initialized.owl.carousel',function(event){
        $('.tablo-left').text(event.item.index);
        $('.tablo-right').text(event.item.count);
    });


    shopSlider.owlCarousel({
        items: 1,
        loop: true, // бесконечная прокрутка
        //dots: false, // убрали точки
        smartSpeed: 500,
        margin: 0,
         autoplay:true,
         autoplayTimeout: 5000,
         autoplayHoverPause:true,
    //      responsive:{
    //      300:{
    //          items:1,
    //          //nav:true
    //      },
    //      800:{
    //          items:1,
    //         // nav:false
    //      },
    //      1000:{
    //          items:1,
    //          //nav:true,
    //          //loop:false
    //      }
    //  }
    });

    shopSlider.owlCarousel();
    $('#arrow-left').click(function() {
      shopSlider.trigger('next.owl.carousel');
    })
    $('#arrow-right').click(function() {
      shopSlider.trigger('prev.owl.carousel');
    })

   

 //рендерит текущую страницу и общее количество страниц
shopSlider.on('changed.owl.carousel', function(e) {
   $('.tablo-left').text(++e.page.index);  
   $('.tablo-right').text(e.item.count);
});

});












