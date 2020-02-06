<?php 
class QuadraticEquation {
    public $a;
    public $b;
    public $c;
    public function __construct($a,$b,$c) 
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    public function getDiscriminant() {
        return (($this->b)*2-4*$this->b * $this->c);
    }
    public function getRoot1(){
        return ((-$this->b) + pow($this->b **2 - 4 * $this->a *  $this->c,0.5))/2 * $this->a;
    }
    public function getRoot2(){
        return  ((-$this->b) - pow($this->b **2 - 4 * $this->a *  $this->c,0.5))/2 * $this->a;
    }
    public function getRootBoth(){
        return ((-$this->b) + pow($this->b **2 - 4 * $this->a *  $this->c,0.5))/2 * $this->a;
    }
}
?>

