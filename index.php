<?php
require_once('config.php');
require_once('Event.php');
require_once('Calendar.php');
require_once('pl.eventcalendar.config.php');

use dszymczuk\EventDB;
use dszymczuk\Calendar;


?>

<html lang="pl">
<head>
    <meta charset="utf-8">
    <title>Event Calendar</title>
    <meta name="author" content="Damian Szymczuk">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="js/bootstrap.min.js" rel="stylesheet">
</head>
<body>

<div class="container">

    <div class="row">
        <div class="offset1 span11">
            <h2>Event Calendar</h2>
        </div>
    </div>

    <div class="row">
        <div class="offset1 span11">
            <?php

            $calendar = new Calendar();
            $calendar->setNameDays($name_days);
            $calendar->setNameMonth($name_months);
            try
            {
                $calendar->setMonth(10);
            }catch (Exception $e)
            {
                echo $e;
            }

            echo $calendar->generateCalendar();

            ?>
            </div>
    </div>

    <div class="row">
        <div class="offset1 span11">
            <p>Author: <a href="http://dszymczuk.pl">Damian Szymczuk</a></p>
            <p>Application version: <?php echo APP_VERSION; ?></p>
        </div>
    </div>
</div>

</body>
</html>