<!DOCTYPE html>
<html lang="ru">
<?php
    include($_SERVER['DOCUMENT_ROOT']."/db.php"); 
?>
<head>                      
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!--end favicon-->
    <title>Moscow</title>
    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/header/style_header.css">
    <link rel="stylesheet" href="css/index/style.css">
    <link rel="stylesheet" href="css/tours/style_tours.css">
    <link rel="stylesheet" href="css/contacts/style_contacts.css">
    <link rel="stylesheet" href="css/book/style_book.css">
    <link rel="stylesheet" href="css/subscriber/style_subscriber.css">
    <link rel="stylesheet" href="css/footer/style_footer.css">
    <link rel="stylesheet" href="css/error/style_error.css">
    <link rel="stylesheet" href="css/comments/style_comments.css">
    <link rel="stylesheet" href="css/search/style_search.css">

</head>

<body>
    
    
<header>

<?php 
//Определим URI
$uri=$_SERVER['REQUEST_URI'];
if(strlen($uri)>1){
$len = strlen($uri);
$part_uri=substr($uri,0,$len-4);
}else{$part_uri=$uri;}

$sliderHeader = [];
$mas_part_uri=[];
        //Формируем данные картинок в слайдер
    $sql_cards = " SELECT * FROM `sliderheader`";
    $result_cards = mysqli_query($link, $sql_cards);

    while( $data_card = mysqli_fetch_assoc($result_cards) ){
        array_push($sliderHeader, $data_card);
    }
    ?>
    <?php foreach( $sliderHeader as $key => $row): ?>
        <?php foreach( $row as $k => $value): ?>
            <?php if( $k == $part_uri ):?>
                <?php array_push($mas_part_uri,$value)?>    
             <?php endif; ?>                                                
    <?php endforeach;?> 
    <?php endforeach;?>   
            <div id="headerSleder" class="owl-carousel">
                <?php foreach($mas_part_uri as $value): ?>
                    <div class=<?=$value?>>
                        <div class="wrapper">
                            <div class="navigation">
                                <div class="logo">
                                    <a href="/" class="picture-spasskaya-tower"></a>
                                    <a href="/" class="picture-MyMoscow">MyMoscow</a>
                                </div>
                                <div class="nav">
                                    <a href="/">Главная</a>
                                    <a href="tours.php">Наши услуги</a>
                                    <a href="#our-company" target="#our-company">О<span>q</span>компании</a>
                                    <a href="contacts.php">Контакты</a>
                                    <a href="#comments" target="#comments">Отзывы</a>
                                </div>
                            </div>
                            <div class="text">
                                <h1>Необычная Москва</h1>
                                <p>MyMoccow-агенство интересных маршрутов</p>
                            </div>
                            <div class="button">
                                <a href="tours.php">ПОДРОБНЕЕ О НАС</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?> 
            </div> 
</header> 


