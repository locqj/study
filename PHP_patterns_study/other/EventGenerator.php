<?php


namespace other;


abstract class EventGenerator {
    private $observers = array();
    function addObserver(Observer $obserber){
        $this->observers[] = $obserber;
    }
    function notify(){
        foreach($this->observers as $observer)
        {
            $observer->update();
        }
    }
}