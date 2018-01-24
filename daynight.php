 <?php

            date_default_timezone_set('Europe/Amsterdam');
            $image ="";
            $time ="";
            $text ="";
            $date = "Today is " .date("d-M-Y");
            $displaytime = "Last load on: " .date("h:i:sa");
            
            $time = date("H");
            if ($time >="6" && $time < "12") {
                $text = "Good morning,";
                $image = 'backgrounds/morning.png';
            } elseif ($time >= "12" && $time < "18") {
                $text = "Good afternoon, ";
                $image = 'backgrounds/afternoon.png';
            } elseif ($time >= "18" && $time < "0") {
                $text = "Good evening, ";
                $image = 'backgrounds/evening.png';
            } elseif ($time >= "0" && $time < "6") {
                $text = "Good night, ";
                $image = 'backgrounds/night.png';
            }
        ?>

<html>
    <head>
        <title> Goede-php </title>
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="js/updateclock.js"></script>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    </head>
    <body background="<?php echo  $image; ?>">
        <body onload="updateClock()">
        <p id="message">
            <span id= "big"><?php
                echo $text;
            ?></span>
            <br>
            <?php
                echo $date;
            ?>
            <br>
            <span id="timer"></span>
            <br>
            <?php
             echo $displaytime
            ?>
        </p>
    </body>
</html>