<?php
    //print_r($_GET); //GET and POST google.com
    //echo $_GET[name];
    //GET and POST - google

    if ($_POST["name"] == "")
        echo "Введите имя. <a href='/'>Исправить</a>";
    else
        header("Location:index.php");
    
?>