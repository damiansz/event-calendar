<?php

namespace dszymczuk;

interface Event {
    public function getEvents($month,$year);
    public function addEvent($event_date,$event_title,$event_description,$event_show = 1);
    public function editEvent($event_id,$event_date,$event_title,$event_description,$event_show = 1);
    public function deleteEvent($event_id);
    public function deleteEventByDate($event_date);
}