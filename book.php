<?php
     include($_SERVER['DOCUMENT_ROOT']."/header.php"); 
     include($_SERVER['DOCUMENT_ROOT']."/db.php"); 
?>

    <link rel="stylesheet" href="css/book/style_book.css">
 <?php





            // Получаем данные из БД
        $sql_cards = "SELECT * FROM book  ORDER BY id LIMIT 1";
        $result_cards = mysqli_query($link, $sql_cards);

        while( $data_card = mysqli_fetch_assoc($result_cards) ){
            $template['data'][] = $data_card;
        } 
    ?>

   <!-- Рендиринг страницы -->
    <?php if($template['data'] == true) :?> 
        <div class="book">
            <div class="wrapper">
                <div class="wrapper-content"  id="articles">
                    <?php  foreach( $template['data'] as $card_row ):  ?>
                        <div class="content">
                            <h3>Имя: <?= $card_row['fio'] ?></h3>
                            <h3>E-mail: <?= $card_row['email'] ?></h3>
                            <h3>Текст: <?= $card_row['text'] ?></h3>
                            <h3>Дата:<?=  $card_row['date_create'] ?></h3>
                            
                        </div> 
                    <?php endforeach;?> 
                </div>
                
                <div class="return">
                    <a href="tours.php">ВЕРНУТЬСЯ НА СТРАНИЦУ БРОНИРОВАНИЯ ЭКСКУРСИЙ</a>
                    <div id="more">ДОБАВИТЬ КЛИЕНТОВ ИЗ БД</div>
                </div>
                <div class="fon">
                    <div>
                        КОНТАКТЫ В БАЗЕ ЗАКОНЧИЛИСЬ
                    </div> 
                    <div class="watch"><a href="../tours.php">НАЖМИТЕ, ЧТОБЫ ВЕРНУТЬСЯ НА СТРАНИЦУ БРОНИРОВАНИЯ</a></div> 
               </div> 
            
            </div>
        </div>
<?php endif; ?> 

<script type="text/javascript">


var more = document.getElementById('more');
var articles = document.getElementById('articles');
var content = document.querySelector('.content');

var startFrom = 1; // позиция с которой начинается вывод данных
more.addEventListener('click', function () {
    var ajax = new XMLHttpRequest();
    ajax.open('POST', '/ajax.items.php');
    ajax.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    ajax.send('start=' + startFrom);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            var data = JSON.parse(ajax.responseText); //тут будет js-массив

            if (data.length !== 0) {
                console.log(data);
                data.forEach(function (product) {
                    var commentList = document.createElement('div');
                    commentList.classList.add('content');
                    commentList.innerHTML = '\n                    <h3> \u0418\u043C\u044F: ' + product.fio + ' </h3>\n                    <h3> Text: ' + product.email + ' </h3>\n                    <h3> Text: ' + product.text + ' </h3>\n                    <h3> \u0414\u0430\u0442\u0430: ' + product.date_create + ' </h3>\n                   \n                ';
                    articles.appendChild(commentList);
                    console.log($('.masonry'));
                });
                startFrom += 1;
            } else {
                $('.fon').css({ "display": "flex" });
                setInterval(function () {
                    $('.fon').css({ "display": "none" });
                }, 7000);
            }
        }
        
    };
});

</script>

    <script src="jquery.js"></script>
    <script src="libs/imagefill/jquery-imagefill.js"></script>
    <script src="libs/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="libs/masonry/masonry.pkgd.min.js"></script>

    <script src="common.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>
    <script src="shop-slider.js"></script>
    <script src="header-slider.js"></script>
    <script src="script.js"></script>
    </body>

</html>


