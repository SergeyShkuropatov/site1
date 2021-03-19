<?php 
    $title = "Поиск заявок";
    include($_SERVER['DOCUMENT_ROOT']."/header.php");  
    include($_SERVER['DOCUMENT_ROOT']."/db.php"); 
// ПОИСК №!.    Делаем поиск по таблице comments в  index.php (таблица с комментариями)

    function clean_field( $key ){
        $value = '';
        if( isset( $_GET[$key] ) ){
            //trim удаляет все проблемы, отступы и переносы строк сначала и в конце строчки
            //strip_tags удаляет html и php из строки
            $value = trim( strip_tags( $_GET[$key] ) );
        }
        return $value;
    }
    $template1 = [
        'data' => [],
        'error'=> []
    ];
    $template2 = [
        'data' => [],
        'error'=> []
    ];
    $template3 = [
        'data' => [],
        'error'=> []
    ];
    if(isset($_GET['search']) ){ 
        $template['data']['is_search'] = true;
        $search = clean_field('search');
        //Запрос который должен уходить в БД
        //like позволяет в SQL проверять строчку на содержание подстроки
        //Елена - это пример поисковой строки, который может придти

        $sql = "SELECT * FROM `commentsi` WHERE id = '{$search}' or email = '{$search}' or fio like N'%{$search}%' or text_comment like N'%{$search}%' or date_create like '%{$search}%' ";
        $result = mysqli_query($link, $sql); 
        $template1['data']['results'] = [];
        while($row = mysqli_fetch_assoc($result)){
            $template1['data']['results'][] = $row;
        }
        
        $sql = "SELECT * FROM `book` WHERE id = '{$search}' or fio like N'%{$search}%' or email = '{$search}' or text like N'%{$search}%' or date_create like '%{$search}%'";
        $result = mysqli_query($link, $sql); 
        $template2['data']['results'] = [];
        while($row = mysqli_fetch_assoc($result)){
            $template2['data']['results'][] = $row;
        }
        
        $sql = "SELECT * FROM `subscriber` WHERE id = '{$search}' or fio like N'%{$search}%' or email = '{$search}' or text_comment like N'%{$search}%' or date_create like '%{$search}%'";
        $result = mysqli_query($link, $sql); 
        $template3['data']['results'] = [];
        while($row = mysqli_fetch_assoc($result)){
            $template3['data']['results'][] = $row;
        }

    }else{
        $template['data']['is_search'] = false;     
    }


?>


<div class="search">
    <div class="navigation">
        <div class="logo">
            <a href="/" class="picture-spasskaya-tower"></a>
            <a href="/" class="picture-MyMoscow">MyMoscow</a>
        </div> 
        <div class="nav">
            <a href="/">Главная</a>
            <a href="tours.php">Наши услуги</a>
            <a href="/#our-company" target="#our-company">О<span>q</span>компании</a>
            <a href="contacts.php">Контакты</a>
            <a href="/#comments" target="#comments">Отзывы</a>
        </div> 
    </div>
<!-- -------------------------------------------------------
 Показываем блок с результатами поиска в таблице commentsi -->
        <?php if( $template1['data']['results'] ||  $template2['data']['results'] ||
        $template3['data']['results'] == true):?>   
    <div class="text">
        <?php if( $template1['data']['results'] ):?>
            <h3>Эти данные из таблицы commentsi</h3>
            <ol>
                <?php foreach($template1['data']['results'] as $result_row):?>
                    <li>
                        <?php foreach($result_row as $key => $value): ?>
                            <?php if( $key == 'email' ): ?>
                                <span>Email: <a href="mailto:<?=$value?>"><?=$value?>;</a></span>
                                <?php elseif($key == 'fio'):?>
                                <span>Имя:  <a href="/"><?=$value?></a>;</span>
                                <?php elseif($key == 'id'):?>
                                    <?php continue; ?>
                                <?php elseif($key =='text_comment'):?>
                                <span>Text:  <?=$value?>;</span>
                                <?php elseif($key == 'ID'):?>
                                <span>ID:  <?=$value?>;</span>
                                <?php elseif($key == 'date_create'):?>
                                <span>Дата:  <?=$value?>;</span>
                            <?php endif;?>
                        <?php endforeach ?>
                    </li>
                <?php endforeach;?>
            </ol>
        <?php endif;?> 
    </div>


<!--
 ------------------------------------------------------- 
  Показываем блок с результатами поиска  в таблице book -->

        
    <div class="text">
        <?php if( $template2['data']['results'] ):?>
            <h3>Эти данные из таблицы book</h3>
            <ol>
                <?php foreach($template2['data']['results'] as $result_row):?>
                    <li>
                        <?php foreach($result_row as $key => $value): ?>
                            <?php if( $key == 'email' ): ?>
                                <span> Email:<a href="mailto:<?=$value?>"><?=$value?>;</a></span>
                                <?php elseif($key == 'fio'):?>
                                <span> Имя:<a href="/#comments"><?=$value?></a>;</span>
                                <?php elseif($key == 'id'):?>
                                    <?php continue; ?>
                                <?php elseif($key =='text'):?>
                                <span>Text: <?=$value?>;</span>
                                <?php elseif($key == 'ID'):?>
                                <span>ID: <?=$value?>;</span>
                                <?php elseif($key == 'date_create'):?>
                                <span>Дата: <?=$value?>;</span>
                            <?php endif;?>
                        <?php endforeach ?>
                    </li>
                <?php endforeach;?>
            </ol>
        <?php endif;?> 
    </div>


<!--
 ------------------------------------------------------- 
  Показываем блок с результатами поиска  в таблице subscriber -->

        
    <div class="text">
        <?php if( $template3['data']['results'] ):?>
            <h3>Эти данные из таблицы subscriber</h3>
            <ol>
                <?php foreach($template3['data']['results'] as $result_row):?>
                    <li>      
                    <?php foreach($result_row as $key => $value):?>
                        <?php if( $key == 'email' ): ?>
                            <span>Email:  <a href="mailto:<?=$value?>"><?=$value?>;</a></span>
                            <?php elseif($key == 'fio'):?>
                            <span>Имя: <?=$value?>;</span>
                            <?php elseif($key == 'id'):?>
                                <?php continue; ?>
                            <?php elseif($key =='text_comment'):?>
                            <span>Text:  <?=$value?>;</span>
                            <?php elseif($key == 'ID'):?>
                            <span>ID:  <?=$value?>;</span>
                            <?php elseif($key == 'date_create'):?>
                            <span>Дата: <?=$value?>;</span>
                        <?php endif;?>
                    <?php endforeach ?>
                    </li>
                <?php endforeach;?>
            </ol>
        <?php endif;?>       
        <?php else:?>
        <p>Поиск не дал результатов</p>
    <?php endif;?> 
    </div>   
</div> 
    <?php
        include($_SERVER['DOCUMENT_ROOT']."/header.php"); 
    ?>
</body>
</html>

