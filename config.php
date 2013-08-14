<?php
$db_conf = array(
    'host' => 'localhost',
    'user' => 'root',
    'pass' => 'qweasd',
    'db_name' => 'event_calendar');


define("APP_VERSION", '0.0');




/*

Create table:


CREATE TABLE events (
event_id  int NOT NULL AUTO_INCREMENT ,
event_date  date NOT NULL ,
event_title  varchar(255) NOT NULL ,
event_description  mediumtext NOT NULL ,
event_show  tinyint NOT NULL DEFAULT 1 ,
PRIMARY KEY (event_id)
)
;

 */