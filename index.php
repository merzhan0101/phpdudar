<?php
    //Создание редиректа
    // header("Location: https://youtube.com");//перенаправление на указ сайт
    // exit;

    
    //Форма обратной связи
    session_start();
    if (isset($_POST["send"])){
        //print_r($_POST);
        $from = htmlspecialchars ($_POST["from"]);
        $to = htmlspecialchars ($_POST["to"]);
        $subject = htmlspecialchars ($_POST["subject"]);
        $message = htmlspecialchars ($_POST["message"]);
        $_SESSION["from"] = $from;
        $_SESSION["to"] = $to;
        $_SESSION["subject"] = $subject;
        $_SESSION["message"] = $message; 
        $error_from = "";
        $error_to = "";
        $error_subject = "";
        $error_message = "";
        if($from = "" || !preg_match("/@/", $from)){
            $error_from = "Введите правильный email";
            $error = true;
        }
        if($to = "" || !preg_match("/@/", $to)){
            $error_to = "Введите правильную почту";
            $error = true;
        }
        if(strlen($subject) == 0){
            $error_subject = "Введите тему сообщения";
            $error = true;
        }
        if(strlen($message) == 0){
            $error_message = "Введите сообщения";
            $error = true;
        }
        if(!$error){
            $subject = "=?utf-8?B?".base64_encode($subject)."?=";
            $headers = "From: $from\r\nReply-to: $from\r\nContent-type: text/plain; charset=utf-8\r\n";
            mail ($to, $subject, $headers, $message);
            header ("Location: success.php?send=1");
            exit;
        }

    echo "Salem alem!<br />"; //comments
    /* Comments */
    # Comment
    echo "Salem Merzhan";

    //Переменные
    $number = 21;
    $float = -3.33;
    $string = "Salem";
    $bool = true;

    echo "<br />Number is = $number";
    echo "<br />";
    echo "float is = $float";
    echo "<br />";
    echo "String is = $string";
    echo "<br />";
    echo "Bool is = $bool";
    echo "<br />";
    $number = 2022;
    echo "Number is = $number";

    //Const
    echo "<br />";
    echo "<br />";
    echo PHP_VERSION;

    define("PI", 3.14);
    echo "<br />";
    echo PI;
    echo "<br />";
    echo defined("PI");

    //Арифм операции
    $a = 14;
    $b = 7;
    $qosu = $a + $b;
    $azaytu = $a - $b;
    $kobeitu = $a * $b;
    $bolu = $a / $b;
    
    echo "<br />";
    echo "<br />";
    echo "Summa iz $a and $b = $qosu<br />";
    echo "Azaytu iz $a and $b = $azaytu<br />";
    echo "Kobeitu iz $a and $b = $kobeitu<br />";
    echo "Bolu iz $a and $b = $bolu<br />";

    $d = 5;
    $ostatok = $a % $d;
    echo "Ostatok pri delenii iz $a and $d = $ostatok";

    $e = 9;
    $e *= $e;
    echo "<br />", $e;
    echo "<br />";
    $e++;
    echo $e;

    //Строковые операции
    $str_1 = "<b>Qazaq</b> <input type = \"text\"";
    $str_2 = "<i>Republic</i>";

    echo "<br />".$str_1." ".$str_2." \" \\";
    //вывести кавычку
    echo ' \' ';

    //Логические операции(bool) google.com(|| and &&)
    $x = 18;
    $y = 21;
    $z = 5;

    $bool_1 = $x == $y;
    $bool_2 = $x < $y;
    $bool_3 = !($x == $y);
    $bool_4 = $x > $y ^ $z == $y; //^ - google
    $bool = !($x < $y && $z < $y) || $x != $y; 

    echo "<br />".$bool_1;
    echo "<br />".$bool_2;
    echo "<br />".$bool_3;
    echo "<br />".$bool_4;
    echo "<br />".$bool;


    //Оператор эквивалентности ===
    $string = "Example";
    $num = 0;

    $bool_1 = string == true;
    echo "<hr /><br />$bool_1 = $num == \"\";";

    $bool_2 = $num == "";
    echo "<br />$bool_2 = $num == \"\";<hr />";

    $bool_3 = string === true;
    echo "<br />$bool_3 = $num == \"\";";

    $bool_4 = $num === "";
    echo "<br />$bool_4 = $num == \"\";";


    //Условные операторы
    $k = 18;
    $m = 9;
    echo "<br />";
    if(($k / $m == 2) && $m < $k && ($m * 2 == 18)){
        echo("Durys");
    } elseif($k % $m == 0 || $k < $m){
        $num = 5;
        echo("Number:".$num);
    } 
    else{
        echo("Burys");
    }

    $k == $m ? $string = "YES" : $string = "NO";
    echo "<br />".$string;

    //switch case
    $x = 10;
    echo "<hr />";
    switch($x){
        case "Hello": echo "this variable is string"; break;
        case 1: echo "this var equally is one"; break;
        case 50: echo "this int equally is 50"; break;
        case 100: echo "this number equally is 100"; break;
        default: echo "WHAT?!<br />";
    }

    //Циклы
    for($i = 0; $i < 10; $i++){
        echo "Цикл под номером $i<br />";
    }

    $x = 1;
    while($x <= 10){
        echo "This number is $x<br />";
        if($x == 7)
            for($y = 0; $y < 5; $y += 3)
                echo("This iteracia - $y<br />");
        //echo "This number is $y<br />";
        $x++;
    }

    $z = 10;
    echo "<br />";
    
    do{
        echo "Operation completed - $z";
        $z++;
    }while($z < 5);


    //functios
    echo "<hr />";
    function my_function($soz, $x, $y){
        $soz = math($x, $y);
        echo $soz;
    }

    function math($first, $second){
        $summa = $first + $second;
        return $summa; 
    }

    $x = 15;
    $y = 18;

    $sum = math($x, $y);
    my_function($sum, $x, $y);
    $res = math(5, 6);
    echo "<br />".$res;


    //arrays elements
    $massiv = array(7, 1.25, "soz", true);
    $array[0] = 100;
    echo "<hr />";
    echo $array[0];
    $massiv[] = "word";
    echo $massiv[4]."<hr />";

    for($i = 0; $i < count($massiv); $i++)
        echo "Element with array $i = ".$massiv[$i]."<br />";

    //Ассоциативные массивы
    $list = array("age" => 21, "city" => "Pavlodar", "name" => "Merzhan");
    $list["age"] = 25;
    echo "<br />"."My age - ".$list["age"]."<br />";
    

    $summa = 0;
    //echo "<hr />"."Арифметикалык ортасы - ".getAvarage(array("first" => 15, "sec" => 17, "third" => 5, "fourth" => 21))."<br />";

    //Арифм ортаны табу
    function getAvarage($array){
        foreach($array as $key => $value){ //foreach - gooole
            $summa += $value;
            echo $key."<br />";
        }
        return $summa / count($array);
    }

    //Двумерные массивы
    $array = array(array(1, 2, 3, true), array("Salem", "Ozen"), array(4.25, "jeltoksan"));
    //echo "<br />".$array [0][2];
    for ($i = 0; $i < count($array); $i++){
        for($j = 0; $j < count($array[$i]); $j++){
            echo $array[$i][$j]." ";
        }
        echo "<br />";
    }


    //Область видимости переменных
    $x = 20;
    echo "Переменная x = $x<br />";
    $x = 15;
    echo "Переменная x = $x<br />";

    function test(){ //  $GLOBALS GOOGLET
        //$GLOBALS["x"] += 7;
        //$x = 0;

        global $x;
        $x += 10;
        //echo "Переменная x = $x<br />";
    }

    test();
    echo "Переменная x = $x<br />";

    function test_2(){
        //static $id;
        $id++;
        echo $id."<br />";
    }

    echo "<br />";
    for($i = 0; $i < 10; $i++){
        test_2();
    }

    //Подключение файлов - изучить require, include
    // echo "<br />";
    // $title="Главная страница";
    // echo "<br />";
    // include_once "header.php";
    // echo "Telo docs";
    // include_once "footer.php";
    ?>

<?php
    //Обработка данных
    //print_r($_GET); //GET and POST google.com
    //echo $_GET[name];
    //GET and POST - google

    if(isset($_POST["done"])){
        if ($_POST["name"] == "")
            echo "Введите имя. <a href='/'>Исправить</a>";
        else
            header("Location:index.php");
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form name="test" action="" method="post"> 
        <br />
        <label>Name: </label>
        <input type="text" name="name" placeholder="name"><br />
        <label>Email: </label>
        <input type="text" name="email" placeholder="email"><br />
        <label>Message: </label><br />
        <textarea name="message" cols="40" rows="10"></textarea><br />
        <input type="submit" name="done" placeholder="Готово"><br />
    </form>
</body>
</html>

<?php

//Функции для работы с типами переменных

    $x = 15;
    if (isset($x)) echo "Переменная сущ";
    else echo "Переменная не сущ";
    echo "<br />";
    unset($x);
    if (isset($x)) echo "Пер сущ";
    else echo "Переменная не сущ";
    echo "<br />";

    $x = 15;
    $bool = false;

    $null;

    //Проверка переменной
    echo "Is Numeric - ".is_numeric($x)."<br />";
    echo "Is Integer - ".is_integer($x)."<br />";
    echo "Is Double - ".is_double($x)."<br />";
    echo "Is String - ".is_string($x)."<br />";
    echo "Is Boolean - ".is_bool($bool)."<br />";
    echo "Is Scalar - ".is_scalar($bool)."<br />";
    echo "Is Null - ".is_null($null)."<br />";
    echo "Is Array - ".is_array($x)."<br />";
    echo "Is Type - ".gettype($x)."<br />";
    echo "Is Type - ".gettype($null)."<br />";


    //Математические функции
    echo "<hr />";
    echo M_PI."<br />".M_E."<br />";
    $x = -15;
    echo abs($x)."<br />";
    $y = 49.454564654;
    echo round($y, 4)."<br />";//функции гугл(round, ceil, floor ...)
    echo mt_rand(1, 5)."<br />";//random number
    echo min(-2, 5, -10)."<br />";
    echo max(100, 200, 300)."<br />";
    $m = 21;
    echo sin($m)."<br />";//cos, tg, ctg = 1/tg, asin, a..;

    //Строковые функции
    $string = "This is mysali";

    echo strlen($string)."<br />";//длина 
    echo strpos($string, "T")."<br />";//находить
    if(strpos ($string, "T") === false){
        echo "T ne naideno";
    } else{
        echo "T naideno";
    }

    echo "<br />".substr($string, 5, -2); //substr - google
    //echo "<br />".str_replace("is", "bul", $string); //замена строки
    echo "<br />".str_replace(array("is", "mys"), array("bul","ex"), $string)."<br />";

    $str = "<b>Salem qalaysin<b>";
    echo ("<b>$str</b>")."<br />";
    echo htmlspecialchars($str)."<br />";//просмотр код страницы
    //strtolower, strtoupper
    echo md5("kaz123")."<br />";//закодировка
    echo trim("    salem         alem          ")."<hr />";//не показ пробелы

    //Функции для работы с массивами
    $massiv = array(1, 2, 55, 7, 21);
    sort($massiv);//rsort - sortirovka naoborot
    print_r($massiv);
    echo "<br />";
    rsort($massiv);//сортировка по убыванию
    print_r($massiv);
    echo "<br />";
    asort($massiv);//сортировка, но ключи сохр = если наоборот то arsort
    print_r($massiv);
    echo "<br />";
    $alist = array("a" => 5, "b" => 10, "c" => 15);
    asort($alist);//по убыв - arsort(ключи сохр)
    print_r($alist);
    echo "<br />";
    krsort($alist);//сорт по ключам, krsort()
    print_r($alist);
    echo "<br />";

    //перемешывать эл в массиве random 
    shuffle($alist);
    print_r($alist);
    echo "<br />";
    //echo in_array(5, $alist); => проверка эл в массиве

    //соединение массивов в один
    $arr_1 = array(1, 2);
    $arr_2 = array(2, 54, 77);
    $array_3 = array_merge($arr_1, $arr_2);
    print_r($array_3);
    echo "<br />";

    //откидывание, то есть похожее на substr
    $array_s = array(1, 2, 3, 5, 6, 4, 2);
    $array_s = array_slice($array_s, 1);//array_slice(эл-т, выбрать массив которую надо убрать)
    print_r($array_s);
    //unset() => удаление элемента


    //================================================================
    //Функции даты
    $start = microtime(true);
    echo "<br />".time()."<br />"; //кол секунд с 1.01.1970-выпуск Unix
    echo microtime(true)."<br />";
    echo "Время работы скрипта: ".(microtime(true) - $start)."секунд."."<br />";

    $time = mktime(21, 05, 23, 5, 28, 2001);
    echo "Bday: ".date("Y-m-d H-i-s", $time)."<br />";
    echo "Сейчас: ".date("Y-m-d H-i-s")."<br />";//дата в наст времение

    $array_d = getdate($time);//показ в массиве
    print_r ($array_d)."<br />";
    //chekdate() - проверка даты
    //==================================================


    // Работа с файлами
    /* r – открыть файла только на чтение
    r+ - открытие файла и на чтение и на запись
    w – создание нового пустого файла для записи и если на момент вызова уже существует файл - он уничтожается
    w+ - аналогичен r+, только если на момент вызова этот файл существует - его содержимое удаляется.
    a – открывает существующий файл в режиме записи и указатель сдвигается на последний байт (в конец файла)
    a+ - открывает файл в режиме чтения и записи одновременно и указатель сдвигается на последний байт файла (в конец файла) 
    */

    // $file = fopen("example.txt", "a+t");
    // fwrite($file, "Salem adam qalaysin");
    // fclose($file);

    $file = fopen("example.txt", "r+t");
        while (!feof($file)){
            echo fread($file, 2)."<br />";
        }
    // fclose($file);

    fseek($file, 0);
    echo "<br />".fread($file, 1)."<br />";
    fclose($file);

    echo "==========="."<br />";
    file_put_contents("mysaly.txt", "Salem qalin qalay")."<br />";
    echo file_get_contents("mysaly.txt")."<br />";//file_exists - проверка файла на существования
    //filesize - размер файла или текста
    //rename("mysaly.txt", "naprimer.txt"); - переименование файла
    //unlink("mysaly.txt"); - удаление файла


    //===============================================================================
    //Права доступа
    echo __FILE__;
    fileperms (__FILE__);//узнать файла права доступа
    echo "<br />";
    echo chmod(__FILE__, 0777);//изменить права доступа к файлу


    //phpinfo() и $_SERVER
    // echo $_SERVER['REMOTE_ADDR'];//глобальный массив содержащий инфу
    // echo phpinfo();//информация сайта - подсказка

    // Отправка почты на email
    $message = "Salem alem";
    $to = "merzhankuralay@gmail.com";
    $from = "merzhan0101@mail.ru";//кому
    $subject = "Тема сообщения";
    $subject = "=?utf-8?B?".base64_encode($subject)."?=";//правильно обрабатывать тему сообщ, кодировка(decode)
    $headers = "From: $from\r\nReply-to: $from\r\nContent-type: text/plain; charset=utf-8\r\n";//обяз, обр сообщ (text/plain, form-data, google)
    mail($to, $subject, $message)."<br />";

    //Работа с куки $_COOKIE(чтоб посмотреть рез нужно поставить код в header)
    
    //setcookie("num", 10, time() + 20);
    //echo "<br />COOKIE: ".$_COOKIE["num"];
    // if(isset($_COOKIE["num"]))
    //     echo "Cookie ustanovlena";
    // else
    //     echo "Cookie ne ustanovlena";
    
    $num = (isset($_COOKIE["num"])) ? $_COOKIE["num"] : 0;
    $num++;
    setcookie("num", $num, time() + 4);
    echo "Пользователь обновил страницу $num раз";

    //Работа с сессиями $_SESSION
    //session_start();//открывает сессию
    $num = (isset($_SESSION["num"])) ? $_SESSION["num"] : 0;
    $num++;
    $_SESSION["num"] = $num;
    echo "Пользователь обновил стр $num раз"."<br />";
    //session_destroy();//закрывает сессию

    
    }
    echo  "<br />"."===============================================================================";//
    //Подключение к бд
    //Выборка записей к БД


    //$arr = array();
    function printResult($result_set){
        echo "<br />";
        echo "Количество записей равно - ".$result_set->num_rows."<br />";
        while (($row = $result_set->fetch_assoc()) != false){
            print_r($row);
            //echo $row["login"];
            echo "<br />";
            //$arr[] = $row;//массив, новый объект косылады
        }
 
        //print_r($arr);
    }

    $mysqli = new mysqli("localhost", "root", "", "my_base");//("хост", "имя польз", "пароль", "имя бд") 
    $mysqli -> query("SET NAMES 'utf8'");

    for($i = 0; $i < 10; $i++){
        $mysqli->query("INSERT INTO `users` (`login`, `password`, `reg_date`)
        VALUES ('User_$i', '".md5($i)."', '".time()."')");
    }


    $result_set = $mysqli->query("SELECT * FROM `users`");
    printResult($result_set);

    $result_set = $mysqli->query("SELECT `id`, `login` FROM `users` WHERE `id` < 40");
    printResult($result_set);

    $result_set = $mysqli->query("SELECT `id`, `login` FROM `users` WHERE `id` < 40 ORDER BY `id` DESC");//order by(asc-оспелы, desk-кемымелы) - сортировка
    printResult($result_set);

    $result_set = $mysqli->query("SELECT `id`, `login` FROM `users` WHERE `id` < 40 ORDER BY `login` DESC LIMIT 0, 2");//LIMIT от, до
    printResult($result_set);

    $result_set = $mysqli->query("SELECT `id`, `login` FROM `users` WHERE `login` LIKE '%ser%'");
    printResult($result_set);

    $result_set = $mysqli->query("SELECT COUNT(`id`) FROM `users`");//считает кол во
    printResult($result_set);
   
    //echo 'Success: '.$success;

    //через цикл
    // for($i = 1; $i < 10; $i++){
    //     $mysqli->query("INSERT INTO `users` (`login`, `password`, `reg_date`) VALUES ('$i', '".md5("$i")." ' , ".time().")");
    // }

    echo "<br />"."DATABASE: ";//добавление и удаление данных
    //$mysql->query("INSERT INTO `users` (`id`, `login`, `password`, `reg_date`) VALUES (NULL, 'ozen', MD5('123'), UNIX_TIMESTAMP());"); //добавление данных кода с бд
    // $mysqli->query("INSERT INTO `users` (`id`, `login`, `password`, `reg_date`) VALUES (NULL, 'ozen', MD5('123'), UNIX_TIMESTAMP());");
    // $mysqli->query("INSERT INTO `users` (`id`, `login`, `password`, `reg_date`) VALUES (NULL, 'ozen', MD5('123'), UNIX_TIMESTAMP());");
    // $mysqli->query("UPDATE `users` SET `reg_date` = '28052050' WHERE `users`.`id` = 6;");
    // $mysqli->query("UPDATE `users` SET `reg_date` = '7187' WHERE `login` = 'salem' OR (`id` >= 4 AND `id` < 38)");
    // $mysqli->query("DELETE FROM `users` WHERE `id` > 41 AND `id`< 45");//удаление, чтоб нумерация начинался с 1=>операция->auto-increment=>1
    //$mysqli->query("DELETE FROM `users`");
    $mysqli->close();



    //ООП В PHP - GOOGLE.COM
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h2>Форма обратной связи</h2>
    <form name="feedback" action="" method="post">
        <label>От кого:</label><br />
        <input type="text" name="from" value="<?=$_SESSION["from"] ?>" />
        <span style="color:red"><?= $error_from ?></span><br /><!-- value: данные сохр -->
        <label>Кому:</label><br />
        <input type="text" name="to" value="<?=$_SESSION["to"]?>" />
        <span style="color:red"><?= $error_to ?></span><br />
        <label>Тема:</label><br />
        <input type="text" name="subject" value="<?=$_SESSION["subject"] ?>" />
        <span style="color:red"><?= $error_subject ?></span><br />
        <label>Ваше сообщение:</label><br />
        <textarea name="message" cols="30" rows="10"><?=$_SESSION["message"] ?></textarea>
        <span style="color:red"><?= $error_message ?></span><br />
        <input type="submit" name="send" value="Отправить" />
    </form>
</body>
</html>
