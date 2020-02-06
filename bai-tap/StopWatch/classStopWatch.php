<?php
   class StopWatch {
       public $startTime;
       public $endTime ;
    //    public function __construct($startTime,$endTime){
    //         $this->startTime = $startTime;
    //         $this->endTime = $endTime;
    //    }
       public function set($startTime,$endTime){
        $this->startTime = $startTime;
        $this->endTime = $endTime;
        
       }
       public function start(){
           return $this->startTime;
       }
       public function stop(){
           return $this->endTime;
       }
       public function getElapsedTime() {
           return ($this->endTime - $this->startTime)*1000;
       }     
   }

?>