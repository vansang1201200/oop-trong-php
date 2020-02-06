<?php 
     class rectangle {
         public $hieght;
         public $whicht;
    
     public function __construct($whicht,$hieght) { //Bắt buộc truyền 2 tham số vào, nếu không muốn thì đễ rỗng function đó
         $this->whicht = $whicht;
         $this->hieght = $hieght;
     }
     public function set($whicht, $hieght){ // truyền từ ngoài vào;
         $this->whicht = $whicht;
         $this->hieght = $hieght;
     }
    // tinh dien tich
    public function get_rectangular() {
        return ($this->hieght * $this->whicht);
    }
    // tinh chu vi 
    public function perimeter() {
        return (($this->hieght + $this->whicht)*2);
    }
    public function display() {
        return "rectangle {" . "whicht= " . $this->whicht . ", hiength=" . $this->hieght . "}";
    }
}