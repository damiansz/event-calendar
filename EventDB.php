<?php

namespace dszymczuk;

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
class EventDB implements Event {



    public function getEvents($month,$year)
    {

    }


    public function addEvent($event_date,$event_title,$event_description,$event_show = 1)
    {

    }

    public function editEvent($event_id,$event_date,$event_title,$event_description,$event_show = 1)
    {

    }

    public function deleteEvent($event_id)
    {

    }

    public function deleteEventByDate($event_date)
    {

    }
}