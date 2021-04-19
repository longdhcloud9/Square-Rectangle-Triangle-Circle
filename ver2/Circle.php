<?php
$rad =$ar = $peri = "";
class Circle{
    private  $radius;
    public $name = "Circle";
    public $editMode =false;
    public function setRadius($radius) {
        $this->radius = $radius;
    }
    public function getRadius() {
        return $this->radius;
    }
    public function area() {
        return $this->radius * $this->radius * pi();
    }
    public function perimeter() {
        return $this->radius * 2 *pi();
    }
}

?>
