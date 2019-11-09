<?php
    print_r($_POST);  
    echo "<br>";

    if($_POST["name"] == "")
        echo "Введены неправильные данные! <br> <a href='/phpstudy3'>Повторить</a>";
    else 
        header("Location: index.php");
?>