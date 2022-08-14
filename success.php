<?php
    session_start();
    if($_GET["send"] == 1)
        echo "Сіз хабарламаны сәтті жібердіңіз ".$_SESSION["to"];
?>