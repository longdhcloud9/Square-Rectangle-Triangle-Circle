<?php
$rec =$ar = $peri = "";
class Rectangle{
    private  $length;
    private  $width;
    public $name="Rectangle";
    public $editMode =false;
    public function setWidth($width) {
        $this->width = $width;
    }
    public function setLength($length) {
        $this->length = $length;
    }
    public function getWidth() {
        return $this->width;
    }
    public function getLength() {
        return $this->length;
    }
    public function area() {
        return $this->length * $this->width;
    }
    public function perimeter() {
        return 2* ($this->length + $this->width);
    }
}

?>
