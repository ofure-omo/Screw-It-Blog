<?php

class Blogger{

    protected $bio;
    protected $url;
            
    function getBio() {
        return $this->bio;
    }

    function getUrl() {
        return $this->url;
    }

    function setBio($bio) {
        $this->bio = $bio;
    }

    function setUrl($url) {
        $this->bio = $url;
    }
    

    public function __construct($bio, $url) {
        $this->bio = $bio;
        $this->url = $url;
    }

}
