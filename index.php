<?php
use dszymczuk\EventDB;
use dszymczuk\Calendar;

require_once('config.php');
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