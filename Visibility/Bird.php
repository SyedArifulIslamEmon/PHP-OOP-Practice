<?php

    //pubilc
   // private
  //protected

class Bird{

    public $canFly;
    // private $legCount;
    protected $legCount;


    public function __construct($canFly,$legCount){

        $this->canFly=$canFly;
        $this->legCount=$legCount;

    }

    protected function canFly(){      //protected method .........

        return $this->canFly;

    }

    public function getLegCount(){

        return $this->legCount;
    }


}

?>