<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>wqeqwe</title>
</head>
<body>
    <h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur voluptate nesciunt, minima culpa excepturi hic maxime aut iure magni, enim doloribus quaerat nam adipisci harum eius! Itaque, cum vel sequi tempora totam. Possimus aliquid, commodi et magnam rem cum, perspiciatis minima necessitatibus saepe placeat incidunt harum perferendis similique doloremque deleniti autem assumenda, illum quis est dolore accusantium libero. Possimus optio natus tenetur ipsa architecto, consequatur officiis explicabo assumenda, ad tempora consequuntur tempore officia voluptatem eum iure repudiandae. A veritatis similique, minima architecto cum cupiditate libero, provident cumque, vitae sequi amet eum, quae dolorem voluptas accusantium reiciendis sunt impedit tenetur! Nulla!</h1>
</body>
</html>


<?php
//    $file = fopen("testWrite.txt", "a+t"); // t - \n <br>   b - NO   // a - переместить курсор в конец документа и дополнить его  w - очистить документ и записать новое значение   + - создать файл если его не существует
//    fwrite($file, "Hello world!\n Hi!\n LALALA");
//    fclose($file);

    $file = fopen("testWrite.txt", "r");
    
    while(!feof($file)){  // feof($file) - проверяет на конец файла    false - нет это не конец файла   true - да это конец файла 
        echo fread($file, 1);  // Где и сколько символов считать
    }
    echo "<br><br>";
    
    fseek($file, 0);  // Устанавливает позицию курсора
    echo fread($file, 100);  
    fclose($file);

    echo "<br><br>";

    file_put_contents("a.txt", "<b>HI IM A.TXT</b>");  // Быстрая запись в файл
    echo file_get_contents("a.txt") . "<br>"; // Быстрое чтение файла
    echo file_exists("a.txt") ? "Файл существует!".  "<br>" : "Файла не существует!" . "<br>";  // Проверка существует ли файл
    echo filesize("a.txt");  // Отображает размер файла (в битах)
    rename("a.txt", "qq.txt");  // Переименовывает файл
    unlink("qq.txt"); // Удаляет файл


    echo "<br><br>";
    
    $file_addr = "addr.txt";

    function addrFun($file_name){
        static $count = 0;
        
        $file = fopen($file_name, "a+t");
        fwrite($file, "$count. " . $_SERVER["REMOTE_ADDR"] . "\n");
        fclose($file);
        
        $count++;
    }
    
    for($i = 0; $i < 10; $i++){
        addrFun($file_addr);
    }

//    phpinfo();

//    header("Location: http://google.com"); // Редирект (перенаправление на другую ссылку)
//    exit;   // Выходить из php

    $message = "Сообщение";  // Сообщение
    $to = "qwerty5q5w@gmail.com";   // На какую почту отправить

    $subject = "Тема сообщения";  // Тема сообщения
    $subject = "=?utf-8?B?".base64_encode($subject)."?="; // Для некоторых почт (mail.ru)

    $from = "qq@mail.ru";   // От кого

    $headers = "From: $from\r\nReply-to: $from\r\nContent-type:text/plain; charset=utf-8\r\n";  //From - от кого   Reply-to - кнопка ответить  Content-type - тип контента

//    mail($to, $subject, $message, $headers);
//    mail($to, $subject, $message);
?>