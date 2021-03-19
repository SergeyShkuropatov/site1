<?php
    include($_SERVER['DOCUMENT_ROOT']."/header.php"); 
?>
    <link rel="stylesheet" href="css/subscriber/style_subscriber.css">
<?php

    // Получаем данные из БД
    $link = mysqli_connect('localhost', 'nasik159_moscow', 'F9j1L8q0', 'nasik159_moscow');
    mysqli_set_charset($link, 'utf8');
    $sql_cards = "SELECT * FROM subscriber ORDER BY id LIMIT 3";
    $result_cards = mysqli_query($link, $sql_cards);

    while( $data_card = mysqli_fetch_assoc($result_cards) ){
        $template['data'][] = $data_card;
    } 

?>

    <!-- Рендиринг страницы -->
    <?php if($template['data'] == true) :?>
        <div class="subscriber">
            <div class="wrapper">
                <div class="wrapper-content" style="width:25%" id="articles">
                    <?php  foreach( $template['data'] as $card_row ):  ?>
                        <div class="content">
                            <h3>Текст: <?= $card_row['text_comment'] ?></h3>
                            <h3>Имя: <?= $card_row['fio'] ?></h3>
                            <h3>E-mail: <?= $card_row['email'] ?></h3>
                            <h3>Дата:<?=  $card_row['date_create'] ?></h3>
                        </div> 
                    <?php endforeach;?> 
              
                <div class="return">
                    <a href="/contacts.php" style="opacity:1">
                        ВЕРНИТЕСЬ НА СТРАНИЦУ БРОНИРОВАНИЯ ЭКСКУРСИЙ.
                        ИЛИ ПРОСКРОЛЬТЕ, ЧТОБЫ ДОБАВИТЬ КЛИЕНТОВ
                    </a>
                </div>
                <div class="fon">
                    <div>
                        КОНТАКТЫ В БАЗЕ ЗАКОНЧИЛИСЬ
                    </div> 
                    <div class="watch"><a href="../contacts.php">НАЖМИТЕ, ЧТОБЫ ВЕРНУТЬСЯ НА СТРАНИЦУ КОНТАКТОВ</a></div> 
               </div> 
            </div>
        </div>
<?php endif;?>

<script type="text/javascript">
// 'use strict';

var articles = document.getElementById('articles');
var content = document.querySelector('.content');
var startFrom = 1; // позиция с которой начинается вывод данных
window.addEventListener('scroll', function () {
    var ajax = new XMLHttpRequest();
    ajax.open('POST', '/ajax.items_scroll.php');
    ajax.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    ajax.send('start=' + startFrom);
      if ($(window).scrollTop() >= $(document).height()-$(window).height()) {
        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4 && ajax.status == 200) {
                var data = JSON.parse(ajax.responseText); //тут будет js-массив
                if (data.length !== 0) {
                    console.log(data);
                    data.forEach(function (product, index) {
                        var commentList = document.createElement('div');
                        commentList.classList.add('content');
                        commentList.innerHTML = '\n                    <h3> \u0418\u043C\u044F: ' + product.fio + ' </h3>\n                    <h3 class="text"> Text: ' + product.email + ' </h3>\n                    <h3 class="text"> Text: ' + product.text_comment + ' </h3>\n                    <h3 class="text" > \u0414\u0430\u0442\u0430: ' + product.date_create + ' </h3>\n                   \n                ';
                        articles.appendChild(commentList);
                    });
                    startFrom += 1;
                } else {
                    $('.fon').css({ "display": "flex" });
                       setInterval(function () {
                           $('.fon').css({ "display": "none" });
                },      5000);
                }
            }
        };
    }
});


</script>

    
    <script src="jquery.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>
    <script src="shop-slider.js"></script>
    <script src="header-slider.js"></script>
    <script src="script.js"></script>
    </body>

</html>
