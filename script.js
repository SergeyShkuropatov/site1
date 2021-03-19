$(document).ready(function(){

//отключение popup

$(window).on('keyup',function(e){
    if(e.keyCode==27){
        $('.question .popup').fadeOut();
    }
})

$('.krestic').on('click',function(){
    $('.question .popup').fadeOut();
});


$('.question .del').on('click',function(){
    $('.question .popup').fadeOut();
})

//resize
$(window).resize(function(){
    var commentWidth = $(window).width();
  $(".owl-stage").css({'width':'commentWidth + "px"'});
});


// Открытие popup-окна для отправки комментария в index.php

$('.comments .link').on('click',function(){
    $('.question .popup').css({display:"flex"});
})


    
 //отключение popup2

$(window).on('keyup',function(e){
    if(e.keyCode==27){
        $('.question2 .popup2').fadeOut();
    }
})

$('.krestic2').on('click',function(){
    $('.question2 .popup2').fadeOut();
});

$('.question2 .del2').on('click',function(){
    $('.question2 .popup2').fadeOut();
});

// Открытие popup-окна для бронирования в tours.php

 $('.tours .book').on('click',function(){
    $('.question .popup').css({display:"flex"});
 });

//Медленный скролл
  $('header [target]').on('click', function(e) {
     e.preventDefault();  
    // var pathname=window.location.pathname;
    console.log(pathname);
    console.log(window.location.hash);
    //из главной страницы
    if(pathname=="/"){
     var attrComments= $(this).attr('target');
    //  console.log($(attrComments));
    console.log($(attrComments).offset().top);
          $('html, body').animate({
            scrollTop: ($(attrComments).offset().top)
        }, 3000);
    }
else
     //не из главной страницы
 {      var attrComments= $(this).attr('target');
        window.location="/"+ attrComments;
      }
   });


//Активные ссылки при переходе на другую страницу 

$("header .nav a[lang]").click(function() {
    $("header .nav a").each(function(value){
 });
    $(this).addClass('link-active');
});

var pathname=window.location.pathname;
if(pathname.length==1){
    var clean_pathname=pathname.slice(0, pathname.length); 
}
else if(pathname.length>1){
 var clean_pathname=pathname.slice(1, pathname.length); 
}
  $('header .nav a[href="'+clean_pathname+'"]').addClass('link-active');


     
 });



