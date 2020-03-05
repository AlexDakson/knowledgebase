<?php

class WatcherSubscribtions {
    
    private $notification;
    
    public function setNotification($notification) {
        $this->notification = new Notification();
    }
    
    public function notification($elemntDiv) {
        preg_match_all("/<div.*?>/", $elemntDiv, $out);
        $tag = $out[0][0];
        $idDoc = $this->getId($tag);
        $textNotificate = $this->getText(
                explode($tag, $elemntDiv)[1]);
        $this->notification->notify($idDoc, $textNotificate);
    }
    
    private function getId($tag) {
        preg_match_all("/id=[^>]*/", $tag, $out);
        $id = explode("id=\"", $out[0][0])[1];
        $id = explode("\"", $id)[0];        
        return $id;
    }
    
    private function getText($tag) {
        return explode("</div>", $tag)[0];
    }
}
$w = new WatcherSubscribtions();
$w->notification("<div id=\"doc1\" >Text</div>");