<?php
 class Fan {
    public const SLOW = 1;
    public const MEDIUM = 2;
    public const FAST = 3;
    private int $speed = self::SLOW;
    private bool $status = false;
    private int $radius = 5;
    private string $color = "blue";

    //public function __construct($speed, $status, $radius, $color)
    // {
    //     $this->speed = 
    // }
    
    public function getSpeed(){
        return $this->speed;
    }
    public function getstatus(){
        return $this->togger;
    }

    public function getradius(){
        return $this->radius;
    }

    public function getcolor(){
        return $this->color;
    }
    public function set_speed($speed) {
        $this->speed = $speed;
    }
    public function set_status($status){
        $this->status = $status;
    }
    public function set_radius($radius){
        $this->radius =$radius;
    }
    public function set_color($color){
        $this->color = $color;
    }
    public function __toString()
    {
     if($this->status == false){
         return $this->speed."<br>" . $this->radius ."<br>" . $this->color ."<br> fan is on <br>";
     }
     else{
         return $this->color . "<br>" . $this->radius . "<br> fan is off <br>";
     }
    }
 }
