<?php
    include($_SERVER['DOCUMENT_ROOT']."/header.php"); 
        include($_SERVER['DOCUMENT_ROOT']."/db.php"); 
?>
<link rel="stylesheet" href="css/index/style.css"/>
   
    <div class="index">
        <div class="search"> 
            <form method="GET" action="search.php">
                <input  type="text" name="search" class="search-field" placeholder='Поиск по сайту'>
                <button type="submit"><img src="icon/xmag.png" alt="кнопка"></button>
            </form>
        </div>

        <div class="we-offer">
            <h2>ЧТО МЫ ПРЕДЛАГАЕМ</h2><br>
            <p>
                Наша главная цель-рассказать о Москве так,
                чтобы это было интересно всем!
            </p>
            <div class="big-container">
                <div class="container-left">
                    <div class="map"></div>
                    <div class="text-container">
                        <h4>НЕОБЫЧНЫЕ МАРШРУТЫ</h4>
                        <p>
                            Мы обязательно порадуем тебя необычными маршрутами Москвы, которые
                            прокладывают наши опытные гиды.Ты увидишь и узнаешь о Москве,
                            что никогда не знал!
                        </p>
                    </div>
                </div>
                <div class="container-right">
                    <div class="souvenir"></div>
                    <div class="text-container">
                        <h4>КЛАССНЫЕ СУВЕНИРЫ</h4>
                        <p>
                            Отличная новость!У нас появился магазин сувениров!И самое
                            примечательное,что все эти сувениры мы делаем сами!Заходи к нам в гости!
                       </p>
                    </div>
                </div>
            </div>
            <div class="big-container">
                <div class="container-left">
                    <div class="compass"></div>
                    <div class="text-container">
                        <h4>ИНТЕРЕСНЫЕ ЭКСКУРСИИ</h4>
                        <p>
                            За время экскурсий, которые у нас больше 20, ты узнаешь все
                            основные достопримечательности.Кремль,Храм Христа Спасителя,
                            так и пройдешься по пешеходным улицам Москвы,узнаешь их историю
                            и сделаешь самые классные фотографии.
                        </p>
                    </div>
                </div>
                <div class="container-right">
                    <div class="images"></div>
                    <div class="text-container">
                        <h4>ФОТОСЕССИ В МОСКВЕ</h4>
                        Команда MyMoscow рада провести креативные фотосессии в
                        любом уголке Москвы. Не важно, свадьба у Вас или просто
                        захотелось добавить в альбом или инстограмм красивых фоток.
                    </div>
                </div>
            </div>
            <div class="big-container">
                <div class="container-left">
                    <div class="discussion"></div>
                    <div class="text-container">
                        <h4>НОВЫЕ ЗНАКОМСТВА</h4>
                        <p>
                            MyMoscow-это целый клуб,где после московских прогулок ты сможешь
                            продолжить общение с теми,кому интересна Москва,знакомиться
                            с новыми людьми и делиться впечатлениями.
                        </p>
                    </div>
                </div>
                <div class="container-right">
                    <div class="sun"></div>
                    <div class="text-container">
                        <h4>ЯРКИЕ ВПЕЧАТЛЕНИЯ</h4>
                        <p>
                            Самое важное -это яркие эмоции,которые останутся с тобой
                            на долгое время!Поэтому в нашей команде мы ждем именно тебя!
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="our-company" id="our-company">
            <div class="picture"></div>
            <div class="text">
                <h1>КТО МЫ ТАКИЕ</h1><br>
                <p>
                    Мы-команда тех, кто любит историю и любит Москву.<br><br>
                    Москва-это не только место по "заколачиванию денег" и "взращиванию карьеры",
                    а еще и бесконечно красивые памятники природы,заказники,парки,заповедники.
                    Активный отдых в Москве и Подмосковье-это отличная возможность вырваться из
                    душного мегаполиса куда-нибудь в "дебри",навстречу приключениям.К счастью,
                    не все Подмосковье еще "облагорожено" асфальтными дорожками и высоченными
                    коттеджными заборами.Еще встречаются места,настолько глухие и далекие,
                    что, очутившись там,кажется,что мы-первый человек,ступивший на эту землю.<br><br>
                    Там где не проедет автомобилист и даже велосипедист, найдет лазейку и откроет
                    для себя все красоты 100% бездорожья турист,проводящий свой активный отдых в
                    Подмосковье.<br><br><br>
                </p>
                <a href="tours.php">
                    ПОДРОБНЕЕ О НАС
                </a>
            </div>
        </div>
        <div class="moscow-photos">
            <h2>МОСКВА В ФОТОГРАФИЯХ</h2>
            <div class="polosa"></div>
            <div class="text">
                Проще всего рассказать обо всем в фотографиях.
                Смотрите наши фотоотчеты и присылайте нам свои фотографии.
            </div>
            <div  class="photos">
                <div class="photo"><div class="photo_1 sizes"></div></div>
                <div class="photo"><div class="photo_7 sizes"></div></div>
                <div class="photo"><div class="photo_5 sizes"></div></div>
                <div class="photo"><div class="photo_3 sizes"></div></div>
                <div class="photo"><div class="photo_8 sizes"></div></div>
                <div class="photo"><div class="photo_6 sizes"></div></div>
                <div class="photo"><div class="photo_4 sizes"></div></div>
                <div class="photo"><div class="photo_2 sizes"></div></div>             
            </div>
        </div>
    
<?php
   // Получаем данные из БД
   $link = mysqli_connect('localhost', 'nasik159_moscow', 'F9j1L8q0', 'nasik159_moscow');
   mysqli_set_charset($link, 'utf8');
   $sql_cards = "SELECT * FROM commentsi  ORDER BY id DESC LIMIT 10";
   $result_cards = mysqli_query($link, $sql_cards);

   while( $data_card = mysqli_fetch_assoc($result_cards) ){
    $template_select['data'][] = $data_card;
} 
      
?>
 <!-- Рендиринг комментариев  -->
        <div class="comments" id="comments">    
    <?php if(isset($template_select['data']) && $template_select['data']== true) :?> 
            <h2>ВАШИ ОТЗЫВЫ</h2>
                <div id="shopSleder" class="owl-carousel">
                    <?php foreach( $template_select['data'] as $card_row ): ?>
                            <div class="comment">
                                <div class="avatar"><img src="<?= $card_row['avatar'] ?>" alt='avatar'/></div>
                                <div class="fio"><?= $card_row['fio'] ?></div>
                                <div class="text_comment"><?= $card_row['text_comment'] ?></div>
                                <div class="email"><?= $card_row['email'] ?></div>
                                <div class="date_create"><?= $card_row['date_create'] ?></div>
                            </div>
                    <?php endforeach;?> 
                </div>
               
    <?php endif;?>

            <!-- popup -->
            <div class="question">
                <div class="question-box">
                    <div class="slider-tablo"> 
                        <a href="#!"> <img  id="arrow-left" src="icon/header-slider-left.svg" alt="стрелка влево"></a>
                        &nbsp;
                        <div class="tablo-left"></div>
                        <span>/</span>
                        <div class="tablo-right"></div>
                        &nbsp;
                        <a href="#!"> <img id="arrow-right" src="icon/header-slider-right.svg" alt="стрелка вправо"></a>
                    </div>  
                    <div class=link>Оставьте свой комментарий</div>     
                </div>          
                <div class="popup">          
                    <div class="popup-content">
                        <div class="krestic">&#10006;</div>
                        <h4>Введите имя и комментарий</h4>
                        <form id="index" method="POST" action="comments.php">
                            <input type="hidden" name="page_id" value="350" />
                            <input type="text" name="email" placeholder="email">
                            <input type="text" name="fio" placeholder="fio">
                            <textarea  name="text_comment"></textarea>
                            <button class="button-form-comment" type="submit">Отправить</button>
                        </form>
                    </div>
                    <div class="del"></div>
                </div>
            </div> 
        </div> 


          

         <!-- popup на валидацию формы комментария-->
        <div class="question2">         
            <div class="popup2">          
                <div class="popup-content2">
                    <div class="krestic2">&#10006;</div>
                    <p></p>
                </div>
                <div class="del2"></div>
            </div>
        </div>


       <div class="fon">
            <div>
                МЫ ЗАПИСАЛИ ВАШИ КОММЕНТАРИИ.
            </div> 
        </div> 
        

<!-- Плавный скролл из других страниц -->
<script>
console.log(window.location.hash);
if (window.location.hash){
  var hash = window.location.hash; 
    var target=$(hash);
    // var heightSlider=2*
    console.log($('#headerSleder').height()/2);
    console.log($('#headerSleder').height()*2/3);
    var s=$('#headerSleder').height()*2/3;
      $('html, body').animate({
        scrollTop: (target.offset().top - s) 
    }, 3000);
  }
  
    $(window).resize(function(){
         let burgerNavWidth = $(window).width();
        //  console.log(burgerNavWidth);
         console.log($("#headerSleder").css('height'));
     });
     
  
</script>  



    <?php
       include($_SERVER['DOCUMENT_ROOT']."/footer.php"); 
    ?> 
    