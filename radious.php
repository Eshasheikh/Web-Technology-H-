<?php
class MyCircle {
    public $radius;
    public function __construct($radius) {
        $this->radius = $radius;
    }
   
     public function getRadius()
      { return $this->radius; }
     public function setRadius($radius) 
     { $this->radius = $radius; }
     public function getArea() {
        return $this->radius *2*3.1416 ;
     }

}
$radious=new MyCircle();
$radious->setRadius();
$radius->area;
?>
