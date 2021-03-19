$(document).ready(function(){
 // Отправка формы в файле contacts.php

if(window.location.pathname=='/contacts.php'){  
  let contact = document.querySelector('.contacts form');
    contact.addEventListener('submit',function(e){
    e.preventDefault();
    let xhr = new XMLHttpRequest();
    let email = this.querySelector('[name=email]').value;
    let fio = this.querySelector('[name=fio]').value;
    let text_comment = this.querySelector('[name=text_comment]').value;
    
    if(fio=="" || email=="" || text_comment==""){ 
      $('.question2 .popup2').css({display:"flex"});
         $('.question2 .popup-content2 p').html("<h1>Вы ввели не все данные</h1>");
     }
    else{
         if(email.match(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/) ){
             $('.question2 .popup2').css({display:"none"});
         
         
    xhr.open('POST','insert_contacts.php');
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.send('fio=' + fio +'&email=' + email +"&text_comment=" + text_comment);

    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.status == 200){
            if(xhr.responseText ='Yes'){  
                  contact.reset();
                  $('.fon').css({"display":"flex"});
                      $('.watch a').css({"display":"flex"});
                setInterval(function(){
                    $('.fon').css({"display":"none"});
                      $('.watch a').css({"display":"none"});
                },5000);
            }else{
              window.location="error.php"
            }
   
        }
    }
    
    }else{
             $('.question2 .popup2').css({display:"flex"});
             $('.question2 .popup-content2 p').html("<h1>Вы неправильно ввели email</h1>");  
             
         } 
    }
    
});
}


// Отправка формы в файле tours.php
if(window.location.pathname=='/tours.php'){
    
  let book = document.querySelector('.tours form');
    book.addEventListener('submit',function(e){
    e.preventDefault();
    let xhr = new XMLHttpRequest();
    let email = this.querySelector('[name=email]').value;
    let fio = this.querySelector('[name=fio]').value;
    let text = this.querySelector('[name=text]').value;
    
      if((fio=="") || (email=="") || (text=="")){ 
      $('.question2 .popup2').css({display:"flex"});
         $('.question2 .popup-content2 p').html("<h1>Вы ввели не все данные</h1>");
     }
    else{
         if(email.match(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/) ){
             $('.question2 .popup2').css({display:"none"});
         
    
    xhr.open('POST', 'insert_tours.php');
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.send('fio=' + fio +'&email=' + email +"&text=" + text);
  
    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.status == 200){ 
            if(xhr.responseText ='Yes'){
                book.reset();
                $('.question .popup').fadeOut();
                  $('.fon').css({"display":"flex"});
                      $('.watch a').css({"display":"flex"});
                setInterval(function(){
                    $('.fon').css({"display":"none"});
                      $('.watch a').css({"display":"none"});
                },5000);
            }else{
                window.location='error.php';
            }
   
        }
    }
    
    }else{
             $('.question2 .popup2').css({display:"flex"});
             $('.question2 .popup-content2 p').html("<h1>Вы неправильно ввели email</h1>");  
             
         } 
    }
    
});
}


// Отправка формы в файле index.php
 if(window.location.pathname=='/'){
    
  let comments = document.querySelector('.index #index');
    comments.addEventListener('submit',function(e){
    e.preventDefault();
    let xhr = new XMLHttpRequest();
    let email = this.querySelector('[name=email]').value;
    let fio = this.querySelector('[name=fio]').value;
    let text_comment = this.querySelector('[name=text_comment]').value;
    
      if((fio=="") || (email=="") || (text_comment=="")){ 
      $('.question2 .popup2').css({display:"flex"});
         $('.question2 .popup-content2 p').html("<h1>Вы ввели не все данные</h1>");
     }
    else{
         if(email.match(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/) ){
             $('.question2 .popup2').css({display:"none"});
         
    
    xhr.open('POST', 'comments.php');
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.send('fio=' + fio +'&email=' + email +"&text_comment=" + text_comment);
    

    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.status == 200){
            $('.question .popup').fadeOut();
          if(xhr.responseText='Yes'){
              comments.reset();
                $('.question .popup').fadeOut();
                  $('.fon').css({"display":"flex"});
                      $('.watch a').css({"display":"flex"});
                setInterval(function(){
                    $('.fon').css({"display":"none"});
                      $('.watch a').css({"display":"none"});
                },3000);
            }else{
                window.location='error.php';
            }
   
        }
    }
    }else{
             $('.question2 .popup2').css({display:"flex"});
             $('.question2 .popup-content2 p').html("<h1>Вы неправильно ввели email</h1>");  
             
         } 
    }
    
});
}
});
