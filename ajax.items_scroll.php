<?php
include 'db.php';
 
$template = array(); // массив для результата выборки записей
 
// простая проверка переменной
if (isset($_POST['start']) && is_numeric($_POST['start'])){
 
    $start = $_POST['start']; // точка старта выборки
    // получаем 10 записей начиная с точки старта
        $sql_cards = "SELECT * FROM `subscriber` ORDER BY `id` LIMIT {$start}, 1";
        $result_cards = mysqli_query($link, $sql_cards);

        while( $data_card = mysqli_fetch_assoc($result_cards) ){
            $template[] = $data_card;
        } 
}
 
// Превращаем массив статей в json-строку для передачи через Ajax-запрос
 echo json_encode($template);
?>
    