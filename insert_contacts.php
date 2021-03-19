<?php
    include($_SERVER['DOCUMENT_ROOT']."/db.php"); 
?>
<?php
   //Это переменная, ассоциативный массив для сбора информации необходимой для вывода в шаблон (рендиринг страницы)
    $template = [
        'data'=>[],
        'error'=>[]
    ];
 
   //Функция очистки входных параметров
   function clean_field( $key ){
    $value = '';

    if( isset( $_POST[$key] ) ){
        //trim удаляет все проблемы, отступы и переносы строк сначала и в конце строчки
        //strip_tags удаляет html и php из строки
        $value = trim( strip_tags( $_POST[$key] ) );
    }
    return $value;
}

  //Проверка на то, что пользователь ввел имя и текст
    if(!empty($_POST['fio']) && !empty($_POST['email'])){ 
    //Процедура очистки параметров и занесение их в template
    $template['data']['fields'] = [
        'fio'=> clean_field('fio'),
        'email'=>clean_field('email'),
        'text_comment'=>clean_field('text_comment')
    ];

    //Отправляем данные в БД
        $sql = "INSERT INTO subscriber (id, `fio`,`email`,`text_comment`, `date_create`)";
        $sql .= "VALUE (NULL,'{$template['data']['fields']['fio']}','{$template['data']['fields']['email']}','{$template['data']['fields']['text_comment']}',NOW())";
        $result = mysqli_query($link, $sql);   
        }  
           if( $result ){
        echo 'Yes';
    }else{
        echo 'No';
    }