<?php

class Subscribtions {
    /**
     * @var Array Object class Subscription
     */
    private $subscriptions = [];
    
    /**
     * 
     */
    public function subscribe($user, $document) {
        $this -> subscriptions[] = new Subscribtion(
                $user, $document
        );
    }
    
    public function getUsers($idDoc) {
        $users = [];
        foreach ($this->subscriptions as $subscription) {
            if ($idDoc == $subscription->getDocumentId()) {
                $users[] = $subscription->getUser();
            }
        }
        return $users;
    }
    
}
